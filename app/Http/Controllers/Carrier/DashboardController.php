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
    public function service()
    {
        $services = CarrierService::with('service')->get();
        return view('backend.carriers.service.service', compact('services'));    
    }

    public function AddService(){
        $services = Service::get();
        $returnHTML = view('backend.carriers.service.create', compact('services'))->render();
        return $returnHTML;
    }

    public function SubmitService(Request $request)
    {
        $validator =Validator::make($request->all(),[
                'service_id'  => 'required',
                'full_price' => 'required',
                'load_price' => 'required',
                'auto_price' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else{
            if(CarrierService::where('service_id', '=', $request->service_id)->where('user_id', '=', $request->user_id)->count() > 0){
                return response()->json(['error'=>'Already Exist']);
            }else{
                $customer = CarrierService::create([
                    'service_id'   => $request->service_id,
                    'full_price'   => $request->full_price,
                    'load_price'   => $request->load_price,
                    'auto_price'   => $request->auto_price,
                    'user_id'      => $request->user_id,
                ]);
                return response()->json(['success' => 'Service Added Successfully']);
             }
        }
    }

    public function DestroyService($id)
    {
        $service = CarrierService::find($id);
        $service->delete();
        return redirect()->route('carrier.service')->with(['message' => 'Service Deleted Successfully']);
    }

    public function ShowService($id)
    {
        $services = CarrierService::find($id)->with('service')->get();
        $returnHTML = view('backend.carriers.service.show')->with('services', $services)->render();
        return $returnHTML;
    }

    public function EditService($id)
    {
        $id = $id;
        $services = CarrierService::find($id)->with('service')->get();
        $returnHTML = view('backend.carriers.service.edit',compact('services','id'))->render();
        return $returnHTML;
    }

    public function UpdateService(Request $request){
        $validator =Validator::make($request->all(),[
            'service_id'  => 'required',
            'user_id'  => 'required',
    ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else{
            $input = CarrierService::find($request->service_id);
            $input->update([
                'full_price'   => $request->full_price,
                'load_price'   => $request->load_price,
                'auto_price'   => $request->auto_price,
            ]);
            return response()->json(['success' => 'Service Updated Successfully']);
         }
    }
}
