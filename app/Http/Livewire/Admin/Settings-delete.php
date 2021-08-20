<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component{

    use WithFileUploads;

    public $title;

    public $site_name_ar;
    public $site_name_en;
    public $email;
    public $logo;
    public $icon;
    public $descriptions;
    public $keywords;
    public $status;
    public $main_lang;
    public $msg_maintenance_ar;
    public $msg_maintenance_en;

    protected $rules = [
        'site_name_ar'=> 'required',
        'site_name_en'=> 'required',
        'email'=> '',
        'descriptions'=> '',
        'keywords'=> '',
        'status'=> '',
        'main_lang' => '',
        'msg_maintenance_ar'=> '',
        'msg_maintenance_en'=> '',
    ];

    public function mount($title){
        $this->title = $title;
        $setting = setting();
        $this->site_name_ar = $setting->site_name_ar;
        $this->site_name_en = $setting->site_name_en;
        $this->logo = $setting->logo;
        $this->icon = $setting->icon;
        $this->email = $setting->email;
        $this->descriptions = $setting->descriptions;
        $this->keywords = $setting->keywords;
        $this->status = $setting->status;
        $this->main_lang = $setting->main_lang;
        $this->msg_maintenance_ar = $setting->msg_maintenance_ar;
        $this->msg_maintenance_en = $setting->msg_maintenance_en;
    }

    public function render(){
        return view('livewire.admin.settings');//, ['setting' => setting()]);
    }

    public function save(){
        $this->validate();
        $data = $this->validate();
        if (!empty($this->logo) && $this->logo != null && substr($this->logo,0,7) != "setting"){
            $this->validate([
                'logo'=> 'image|mimes:png,jpg|max:1024',
            ]);
            Storage::has(setting()->logo)?Storage::delete(setting()->logo):'';
            $data['logo'] = $this->logo->store('settings/logo');
        }
        if (!empty($this->icon) && $this->icon != null && substr($this->icon,0,7) != "setting"){
            $this->validate([
                'icon'=> 'image|mimes:png,jpg|max:512',
            ]);
            Storage::has(setting()->icon)?Storage::delete(setting()->icon):'';
            $data['icon'] = $this->icon->store('settings/icon');
        }
        Setting::orderBy('id','desc')->update($data);
        session()->flash('success',trans('admin.Update successfully'));
    }

//    protected function cleanupOldUploads(){
//        $storage = Storage::disk('public');
//        foreach ($storage->allFiles('livewire-tmp') as $filePathname) {
//            if (! $storage->exists($filePathname)) continue;
//            $yesterdaysStamp = now()->subSeconds(30)->timestamp;
//            if ($yesterdaysStamp > $storage->lastModified($filePathname)) {
//                $storage->delete($filePathname);
//            }
//        }
//    }
}
