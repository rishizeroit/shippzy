<?php

namespace App\Http\Controllers\Web;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use DB;
use App\Models\Customer;
use App\Models\User;
use App\Models\Country;

class WebController extends Controller
{

     public function index()
    {
        return view('web.home');
    }

    public function about()
    {
        return view('web.about');
    }

    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status' => '1', 'role' => 'CUSTOMER'])){
                return response()->json(['success' => 'Login Success']);
            }else{
                return response()->json(['false' => 'Login Failed']);
            }
       }else{
           return view('web.login');
       }
    }

    public function register(Request $request)
    {
        if($request->isMethod('post'))
        {
            $validator =Validator::make($request->all(),[
                'name'          => 'required|min:3',
                'email'         => 'required|email|unique:users',
                'password'      => 'required|confirmed|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*#?&]).+$/',
            ]);
            if($validator->fails()){
                return response()->json(['error'=>$validator->errors()->all()]);
            }else
            {
                DB::beginTransaction();
                try{
                    $user = User::create([
                        'name'     => $request->name,
                        'email'    => $request->email,
                        'password' => Hash::make($request->password),
                        'role'     => 'CUSTOMER',
                        'status'   => '0' 
                    ]);
                    $customer = Customer::create([
                        'user_id' => $user->id,
                        'status'  => '0'  
                    ]);
                    DB::commit();
                }catch (\Exception $e){
                    DB::rollback();
                    return false;
                }
                return response()->json(['success' => 'Customer Record Added Successfully']);
            }
        }
        else
        {
            return view('web.register');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    } 

    public function test()
    {
        return view('web.extra.index');
    }

    public function getCountry(Request $request)
    {
        $country = Country::where('city_name', 'LIKE', $request->country.'%')->get();
     
        if(!empty($country->first())){
            return response()->json(['success' => true, 'country'=> $country]);
        }else{
            return response()->json(['false' => 'no result found']);
        }
    }

    public function book(Request $request)
    {
        $unit = "K";
        $ship_from = explode(',', $request->ship_from);
        $ship_to = explode(',', $request->ship_to);
        $lat1 = $this->convertDMSToDecimal( str_replace("."," ",$ship_from[1]));
        $lon1 = $this->convertDMSToDecimal( str_replace("."," ",$ship_from[2]));
        $lat2 = $this->convertDMSToDecimal( str_replace("."," ",$ship_to[1]));
        $lon2 = $this->convertDMSToDecimal( str_replace("."," ",$ship_to[2]));
        return $this->distance($lat1, $lon1, $lat2, $lon2, $unit);
    }

    public function convertDMSToDecimal($latlng)
    {
        $valid = false;
        $decimal_degrees = 0;
        $degrees = 0; $minutes = 0; $seconds = 0; $direction = 1;
        if ($latlng != "") {
            if (preg_match("/^(-?\d{1,3})\s+(\d{1,3})\s*([nsewNSEW]?)$/",$latlng,$matches)) {
                $valid = true;
                $degrees = intval($matches[1]);
                $minutes = intval($matches[2]);
                //$seconds = floatval($matches[3]);
                if (strtoupper($matches[3]) == "S" || strtoupper($matches[3]) == "W" || $degrees < 0) {
                    $direction = -1;
                    $degrees = abs($degrees);
                }
            }
            if ($valid) {
                // A match was found, do the calculation
                $decimal_degrees = ($degrees + ($minutes / 60)) * $direction;
            }
        }
        if ($valid) {
            return $decimal_degrees;
        } else {
            return false;
        }
    }
    public function distance($lat1, $lon1, $lat2, $lon2, $unit) 
    {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
          return 0;
        }
        else {
          $theta = $lon1 - $lon2;
          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $miles = $dist * 60 * 1.1515;
          $unit = strtoupper($unit);
          if ($unit == "K") {
            return ($miles * 1.609344);
          } else if ($unit == "N") {
            return ($miles * 0.8684);
          } else {
            return $miles;
          }
        }
      }

      // public function freeQuote(Request $request)
    // {
    //     $input= $request->all();
    //     return $input;
    //     return view('web.add_services', ['input'=> $input]);
    // }

    // public function addServices(Request $request)
    // {
    //     $input= $request->all();
    //     return $input;
    //     return view('web.free_quote', ['input'=> $input]);
    // }
 
    // public function edit($id)
    // {
    //     $customer =Customer::find($id);
    //     $returnHTML = view('backend.customers.edit')->with('customer', $customer)->render();
    //     return $returnHTML;
    // }
}
