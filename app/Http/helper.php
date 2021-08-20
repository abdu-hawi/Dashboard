<?php

use App\Http\Controllers\UploadController;
use App\Models\Setting;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Gate;

if(!function_exists('check_gate')){
    function check_gate($ability){
        if (Gate::denies($ability)){
            abort(403);
        }
    }
    if(!function_exists('validate_image')){
        function validate_image($ext = null): string{
            if ($ext === null) return 'file|image|mimes:webp,jpeg,png,jpg,bmp,gif,ico|max:5120';
            else return 'image|mime:'.$ext;
        }
    }

    if(!function_exists('upload_file')){
        function upload_file(): UploadController{
            return new UploadController();
        }
    }
    if(!function_exists('setting')){
        /**
         * @throws Exception
         */
        function setting(){
            return cache()->remember('setting',3600*24*30,function (){
                return Setting::query()->orderBy('id','desc')->first();
            });
        }
    }
    if(!function_exists('active_menu')){
        function active_menu($link): array{
            if (preg_match('/'.$link.'/i',Request::segment(2))){
                return ['active disabled' , 'menu-open' , 'display: block;'];
            }else{
                return ['','',''];
            }
        }
    }
}
