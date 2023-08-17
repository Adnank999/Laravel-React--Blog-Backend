<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('superadmin')){
            return view('super');
        }
        elseif(Auth::user()->hasRole('admin')){
            return view('admin.dashboard');
        }
        elseif(Auth::user()->hasRole('user')){
            return view('admin.userdashboard');













            
        }

       
    }
}
