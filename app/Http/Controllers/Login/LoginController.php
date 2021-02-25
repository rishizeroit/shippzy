<?php

namespace App\Http\Controllers\Login;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\Rule;
use Validator;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Carrier;
use DB;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectAdminTo = '/admin/dashboard';
    protected $redirectCarrierTo = '/carrier/dashboard';
    protected $logoutRedirectTo = 'user/login';
    protected $guard = 'admin';
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard($guard);
    }

    public function index()
    {
        if(Auth::check()){
            if(is_admin()){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('carrier.dashboard');
            }
        }
        return view('backend.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status' => '1', 'role' => ['ADMIN','CARRIER'],])){
            if(is_admin()){
                return redirect($this->redirectAdminTo);
            }else{
                return redirect($this->redirectCarrierTo);
            }   
        }else{
            Session::flash('message',trans('auth.failed'));
            Session::flash('alert-class','danger');
            return redirect()->route('user.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect($this->logoutRedirectTo);
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
            if($validator->fails())
            {
                return response()->json(['error'=>$validator->errors()->all()]);
            }else
            {
                DB::beginTransaction();
                try {
                    $user = User::create([
                        'name'     => $request->name,
                        'email'    => $request->email,
                        'password' => Hash::make($request->password),
                        'role'     => 'CARRIER',
                        'status'   => '0' 
                    ]);
                    $carrier = Carrier::create([
                        'user_id' => $user->id,
                        'status'  => '0'  
                    ]);
                    DB::commit();
                }catch (\Exception $e){
                    DB::rollback();
                    return false;
                }
                return response()->json(['success' => 'User Record Added Successfully']);
            }
        }else{
            return view('backend.register');
        }
    }

}
