<?php

namespace App\Http\Middleware;

use App\Helpers\CommonHelper;
use App\Settings;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Students;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Monolog\Handler\LogglyHandler;
use Illuminate\Support\Facades\Route;


class SetLang {
	public function handle($request, Closure $next)
	{
	    $lang = 'en';
	    if(Session::has('lang')) {
	        $lang = Session::get('lang','en');
        }

	    if (isset($lang) && $lang!='') {
	        app()->setLocale($lang);
        }

	    //check installed
	    if(!str_contains($request->path(),'install') && !file_exists(storage_path('installed'))){
	        return redirect('install');
        }

		validateAdmin();
        fixVersion();
		return $next($request);
	}
}
