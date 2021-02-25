<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Validator;
use Hash;
use App\Models\Carrier;
use App\Models\User;
use DB;

class CarrierController extends Controller
{
     public function index()
    {
        $carriers = Carrier::with('getCarUsers')->get();
        return view('backend.carriers.index', [
            'carriers' => $carriers,
        ]);
    }

    public function create()
    {
        $returnHTML = view('backend.carriers.create')->render();
        return $returnHTML;
    }

    public function store(Request $request)
    {
        $validator =Validator::make($request->all(),[
                'name'         => 'required|min:3',
                'email'        => 'required|email|unique:users',
                'password'     => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*#?&]).+$/',
                'phone'        => 'required|min:10',
                'address'      => 'required',
                'company_name' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else{
            DB::beginTransaction();
            try{
                $user = User::create([
                    'name'     => $request->name,
                    'email'    => $request->email,
                    'password' => Hash::make($request->password),
                    'role'     => 'CARRIER',
                ]);
                $carriers = Carrier::create([
                    'user_id'      => $user->id,   
                    'phone'        => $request->phone,
                    'address'      => $request->address,
                    'company_name' => $request->company_name,
                ]);
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                return false;
            }
        }   
            return response()->json(['success' => 'Carrier Record Added Successfully']);
        }

    public function show($id)
    {
        $carrier =Carrier::with('getCarUsers')->find($id);
        $returnHTML = view('backend.carriers.show')->with('carrier', $carrier)->render();
        return $returnHTML;
    }

    public function edit($id)
    {
        $carrier =Carrier::with('getCarUsers')->find($id);
        $returnHTML = view('backend.carriers.edit')->with('carrier', $carrier)->render();
        return $returnHTML;
    }

   
    public function update(Request $request, $id)
    {
        $validator =Validator::make($request->all(),[
                'name'         => 'required|min:3',
                'phone'        => 'required|min:10',
                'address'      => 'required',
                'company_name' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else{
            $carrier = Carrier::with('getCarUsers')->find($id);
            DB::beginTransaction();
            try{
                $carrier->update([ 
                    'phone'   => $request->phone,
                    'address' => $request->address,
                    'status'  => $request->status,
                ]);   
                $carrier->getCarUsers->update([
                    'name' => $request->name,
                    'status' =>$request->status,
                ]);
                DB::commit();
            }catch (\Exception $e){
                DB::rollback(); 
                return false;
            }
            return response()->json(['success' => 'Customer Record Updated Successfully']);
        }
    }

    public function destroy($id)
    {
        $carrier = Carrier::with('getCarUsers')->find($id);
        $carrier->getCarUsers->delete();
        $carrier->delete();
        return redirect()->route('carriers.index')->with(['message' => 'Carrier Deleted Successfully']);
    }
}
