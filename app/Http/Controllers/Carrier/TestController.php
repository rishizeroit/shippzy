<?php

namespace App\Http\Controllers\Carrier;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use Hash;
use App\Models\User;
use App\Models\MetaData;
use Auth;

class TestController extends Controller
{
    
    public function test(Request $request)
    {
        if($request->isMethod('post')){
           
            foreach($request->meta_key as $k=>$vl){

                add_meta_data(Auth::user()->id,$vl,$request->meta_value[$k]);
            }

            var_dump('ddd');
            die;
        }else{
            return view('backend.test');
        }
    }
}
