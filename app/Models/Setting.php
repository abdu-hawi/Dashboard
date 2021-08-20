<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name_ar',
        'site_name_en',
        'logo',
        'icon',
        'email',
        'main_lang',
        'descriptions',
        'keywords',
        'status',
        'msg_maintenance_ar',
        'msg_maintenance_en',
    ];
}
