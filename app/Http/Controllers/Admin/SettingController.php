<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SettingController extends Controller
{
    protected function setting(){
        return view('admin.settings',['title'=>trans('admin.setting.Settings')]);
    }

    /**
     * @throws ValidationException
     * @throws Exception
     */
    protected function setting_save(){
        $data = $this->validate(request(),
            [
                'site_name_ar'=> 'required',
                'site_name_en'=> 'required',
                'logo'=> validate_image(),
                'icon'=> validate_image(),
                'email'=> '',
                'descriptions'=> '',
                'keywords'=> '',
                'status'=> '',
                'main_lang' => '',
                'msg_maintenance_ar'=> '',
                'msg_maintenance_en'=> '',
            ],
            [],
            [
                'site_name_ar'=>'اسم الموقع بالعربي',
                'site_name_en'=>"اسم الموقع بالانجليزي",
                'logo'=>trans('admin.setting.Web logo'),
                'icon'=> trans('admin.setting.Web icon')
            ]
        );
        if (request()->hasFile('logo')){
            $data['logo'] = upload_file()->upload([
                'file' => 'logo',
                'path' => 'settings',
                'upload_type' => 'single',
                'delete_file' => setting()->logo
            ]);
        }
        if (request()->hasFile('icon')){
            $data['icon'] = upload_file()->upload([
                'file' => 'icon',
                'path' => 'settings',
                'upload_type' => 'single',
                'delete_file' => setting()->icon
            ]);
        }
        Setting::query()->orderBy('id','desc')->update($data);
        cache()->forget('setting');
        session()->flash('success',trans('admin.Update successfully'));
        return redirect(route('admin.settings'));
    }
}
