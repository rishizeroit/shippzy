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

class ServicePriceController extends Controller
{  
    
    public function index()
    {
        $services = CarrierService::with('service')->where('user_id', Auth::user()->id)->get();
        //return $services;
        return view('backend.carriers.service.service', compact('services'));    
    }

    public function create(){
        $services = Service::get();
        $returnHTML = view('backend.carriers.service.create', compact('services'))->render();
        return $returnHTML;
    }

    public function store(Request $request)
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
            if(CarrierService::where('service_id', '=', $request->service_id)->where('user_id', '=', Auth::user()->id)->count() > 0){
                return response()->json(['eror'=>'Service Already Exist']);
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

    public function destroy($id)
    {
        $service = CarrierService::find($id);
        $service->delete();
        return redirect()->route('prices.index')->with(['message' => 'Service Deleted Successfully']);
    }

    public function edit($id)
    {
        $services = CarrierService::where('id',$id)->with('service')->first();
        $returnHTML = view('backend.carriers.service.edit')->with('services',$services)->render();
        return $returnHTML;
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'full_price' => 'required',
            'load_price' => 'required',
            'auto_price' => 'required',
    ]);
    if($validator->fails()){
        return response()->json(['error'=>$validator->errors()->all()]);
    }
        else{
            $input = CarrierService::find($id);
            $input->update([
                'full_price'   => $request->full_price,
                'load_price'   => $request->load_price,
                'auto_price'   => $request->auto_price,
            ]);
            return response()->json(['success' => 'Service Updated Successfully']);
         }
    }
}
