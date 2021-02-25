<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

use App\Models\User;

class DashboardController extends Controller
{
    
    public function dashboard(){

        if(is_admin()):
            return view('backend.dashboard');
        else:
            return redirect()->route('carrier.dashboard');
        endif;  
    }

}
