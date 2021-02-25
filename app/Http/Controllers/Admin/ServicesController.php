<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Validator;
use Hash;
use App\Models\Service;
use Illuminate\Support\Facades\File; 
class ServicesController extends Controller
{
     public function index()
    {
        $services = Service::get();
        return view('backend.services.index', compact('services'));
    }

    public function create()
    {
        $returnHTML = view('backend.services.create')->render();
        return $returnHTML;
    }

    public function store(Request $request)
    {
        $validator =Validator::make($request->all(),[
                'name'        => 'required|min:3',
                'description' => 'required|min:3',
                'logo'        => 'required|mimes:jpg,jpeg,png,bmp|max:20000'
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else{
            if($file = $request->hasFile('logo')){
                $file = $request->file('logo') ;   
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/images/' ;
                $file->move($destinationPath,$fileName);
                $request->logo= $fileName ;
            }
            $customer = Service::create([
                'name'          => $request->name,
                'description'   => $request->description,
                'logo'          => $request->logo,
            ]);
            return response()->json(['success' => 'Service Added Successfully']);
        }
    }

    public function show($id)
    {
        $service =Service::find($id);
        $returnHTML = view('backend.services.show')->with('service', $service)->render();
        return $returnHTML;
    }


    public function edit($id)
    {
        $service =Service::find($id);
        $returnHTML = view('backend.services.edit')->with('service', $service)->render();
        return $returnHTML;
    }

   
    public function update(Request $request, $id)
    {
        $validator =Validator::make($request->all(),[
                'name'        => 'required|min:3',
                'description' => 'required|min:3',
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else{
            $input = Service::find($id);
            if($file = $request->hasFile('logo')){
                $file = $request->file('logo');
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/images/' ;
                $file->move($destinationPath,$fileName);
                $request->logo= $fileName ;
                $image_path = public_path("/images/{$input->logo}");
                if(File::exists($image_path)){
                    //File::delete($image_path);
                    unlink($image_path);
                }    
            }
            else{
                $request->logo = $input->logo;
            }
            $input->update([
                'name'          => $request->name,
                'description'   => $request->description,
                'logo'          => $request->logo,
            ]);
            return response()->json(['success' => 'Service updated Successfully']);
        }
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('services.index')->with(['message' => 'Service Deleted Successfully']);
    }
}
