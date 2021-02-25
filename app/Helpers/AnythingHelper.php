<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\MetaData;

if (!function_exists('add_meta_data')) {
    function add_meta_data($meta_id,$meta_key,$meta_value){
            MetaData::create([
            'meta_id'    =>$meta_id, 
            'meta_key'   => $meta_key,
            'meta_value' => $meta_value,
            ]);
    }
}

if (!function_exists('get_meta_data')) {
    function get_meta_data($meta_id,$meta_key=''){  
        if(!empty($meta_key)){
            $data= MetaData::where('meta_id',$meta_id)->where('meta_key',$meta_key)->get()->first();
        }else{
            $data= MetaData::where('meta_id',$meta_id)->get();
        }
        return $data;
    }
}

if (!function_exists('base_url')) {
    function base_url($elment=''){
        if($_SERVER['HTTP_HOST'] == 'localhost'){
            return asset($elment);
        }else{
            return URL::to('/').'/'.$elment;
        }    
    }
}

if (!function_exists('is_admin')){
    function is_admin(){
        $result=false;
        $user = Auth::user();
        if($user->role == 'ADMIN'){
            $result=true;
        }
        return $result;
    }
}

if (!function_exists('is_customer')) {
    function is_customer(){
        $result=false;
        $user = Auth::user();
        if($user->role == 'CUSTOMER'){
            $result=true;
        }
        return $result;
    }
}

if (!function_exists('is_carriers')) {
    function is_carriers()
    {
        $result=false;
        $user = Auth::user();
        if($user->role == 'CARRIER'){
            $result=true;
        }
        return $result;
    }
}

if (!function_exists('change_password')) {
    function change_password($id,$newpass){

    $dada= User::find($id)->update(['password'=> Hash::make($newpass)]);
    return $dada;
 
    }
}

?>