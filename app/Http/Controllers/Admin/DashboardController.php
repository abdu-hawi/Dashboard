<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{

    public function __construct(){
        if (Gate::denies('manage-system') && !auth()){
            abort(403);
        }
    }

    public function index(){
        check_gate('manage-system');
        return view('admin.dashboard');
    }
}
