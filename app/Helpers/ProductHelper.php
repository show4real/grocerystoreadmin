<?php

namespace App\Helpers;

use App\AssessmentDetail;
use App\AssessmentDetailUser;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\ProductVariant;
use App\Permission;
use App\Role;
use App\StudentDetails;
use App\Tenant;
use App\Todo;
use App\TodoAccess;
use App\TodoTask;
use DateTime;
use DateTimeZone;
use \DB;
use App\Yoyaku;
use App\Settings;
use App\Students;
use App\Schedules;
use Carbon\Carbon;
use App\ClassUsage;
use App\Attendances;
use App\ClassesOffDays;
use App\Helpers\ScheduleHelper;
use App\Jobs\SendMail;
use App\NumberOfLesson;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Response;

class ProductHelper{

    public static function isItemAvailable($product_id, $product_variant_id){

        $variant = ProductVariant::where('product_id',$product_id)->where('id',$product_variant_id)->first();
        if($variant){
                $product = Product::where('id',$product_id)->where('status',1)->first();
                return !empty($product);
        }else{
            return false;
        }
    }

    public static function isItemAvailableInUserCart($user_id, $product_variant_id = "")
    {
        $cart = Cart::where('user_id',$user_id);
            if($product_variant_id!='') {
                $cart->where('product_variant_id', $product_variant_id);
            }
        return $cart->exists();
    }

    public static function getTaxableAmount($product_variant_id)
    {
        $sql = "SELECT pv.id,pv.discounted_price,t.percentage,pv.price,
       CASE when pv.discounted_price !=0 THEN pv.discounted_price+(pv.discounted_price*t.percentage)/100
                                        ELSE pv.price+(pv.price*t.percentage)/100 END as taxable_amount,

        CASE when pv.discounted_price !=0 THEN pv.discounted_price+(pv.discounted_price*t.percentage)/100
                                        ELSE pv.discounted_price END as taxable_discounted_price,
        CASE when pv.price !=0 THEN pv.price+(pv.price*t.percentage)/100
                                        ELSE pv.price END as taxable_price
        from product_variants pv left JOIN products p on pv.product_id=p.id LEFT JOIN taxes t on t.id=p.tax_id where pv.id=$product_variant_id";
        $result = DB::select(\DB::raw($sql));
        $result = !empty($result) ? $result[0] : array();

        if (empty($result->percentage) && $result->discounted_price != 0) {
            $result->taxable_amount = $result->discounted_price;
        } else if (empty($result->percentage)) {
            $result->taxable_amount = $result->price;
        }
        return $result;


        /*$sql = "SELECT pv.id,pv.discounted_price,t.percentage,pv.price, p.tax_included_in_price,
        CASE when pv.discounted_price !=0 THEN pv.discounted_price+(pv.discounted_price*t.percentage)/100
                                        ELSE pv.price+(pv.price*t.percentage)/100 END as taxable_amount
        from product_variants pv left JOIN products p on pv.product_id=p.id LEFT JOIN taxes t on t.id=p.tax_id where pv.id=$product_variant_id";
        $result = DB::select(\DB::raw($sql));

        $result = !empty($result) ? $result[0] : array();
        if ($result->tax_included_in_price == 1 || empty($result->percentage)) {
            $result->taxable_amount = 0;
        }

        $result->percentage = $result->percentage??0;
        $result->taxable_amount = $result->taxable_amount??"";
        //    dd($result);
        return $result;*/


    }

}
?>
