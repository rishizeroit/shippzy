<?php

namespace App\Http\Controllers\Carrier;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Service;
use App\Models\User;
use App\Models\CarrierService;
use Auth;
use Validator;

class DashboardController extends Controller
{  
    public function dashboard()
    {
        if(is_admin()):   
            return redirect()->route('admin.dashboard');
        else:
            return view('backend.dashboard');
        endif;      
    }
}
