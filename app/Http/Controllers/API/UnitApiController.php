<?php

namespace App\Http\Controllers\API;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\Unit;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UnitApiController extends Controller
{
    public function index(){
        $units = Unit::orderBy('id','DESC')->get();
        return CommonHelper::responseWithData($units);
    }
    public function save(Request $request){
        \Log::info('Save : ',[$request->all()]);
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'short_code' => 'required',
        ]);
        if ($validator->fails()) {
            return CommonHelper::responseError($validator->errors()->first());
        }
        $unit = new Unit();
        $unit->name = $request->name;
        $unit->short_code = $request->short_code;
        $unit->parent_id = ($request->parent_id)??0;
        $unit->conversion = ($request->conversion && $request->conversion != "")??0;
        $unit->save();
        return CommonHelper::responseSuccess("Unit Saved Successfully!");
    }

    public function update(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'short_code' => 'required',
        ]);

        if ($validator->fails()) {
            return CommonHelper::responseError($validator->errors()->first());
        }

        if(isset($request->id)){
            $unit = Unit::find($request->id);
            $unit->name = $request->name;
            $unit->short_code = $request->short_code;
            $unit->parent_id = ($request->parent_id)??0;
            $unit->conversion = ($request->conversion && $request->conversion != "")??0;
            $unit->save();
        }
        return CommonHelper::responseSuccess("Unit Updated Successfully!");
    }
    public function delete(Request $request){
        if(isset($request->id)){
            $unit = Unit::find($request->id);
            if($unit){
                //@Storage::disk('public')->delete($unit->image);
                $unit->delete();
                return CommonHelper::responseSuccess("Unit Deleted Successfully!");
            }else{
                return CommonHelper::responseSuccess("Unit Already Deleted!");
            }
        }
    }

    public function getUnits(){
        $units = Unit::orderBy('id','ASC')->get();
        return CommonHelper::responseWithData($units);
    }

    /*public function saveUnitsSettings(Request  $request){
        $setting = Setting::where('variable','units_settings')->first();
        if($setting){
            $setting->value = json_encode($request->all());
            $setting->save();
        }else{
            $setting = new Setting();
            $setting->variable = 'units_settings';
            $setting->value = json_encode($request->all());
            $setting->save();
        }
        return CommonHelper::responseSuccess("Units Settings Saved Successfully!");
    }*/
}
