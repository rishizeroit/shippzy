<?php

namespace App\Http\Controllers\Carrier;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Validator;
use Hash;
use App\Models\Service;
use Illuminate\Support\Facades\File; 
use App\Models\Vehicle;

class MyVehicleController extends Controller
{
     public function index()
    {
        $vehicles = Vehicle::get();
        return view('backend.carriers.vehicles.index', compact('vehicles'));
    }
}
