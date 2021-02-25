<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Validator;
use Hash;
use App\Models\Customer;
use App\Models\User;
use DB;

class CustomerController extends Controller
{
     public function index()
    {
        $customers = Customer::with('getUsers')->get();
        return view('backend.customers.index', [
            'customers' => $customers,
        ]);
    }

    public function create()
    {
        $returnHTML = view('backend.customers.create')->render();
        return $returnHTML;
    }

    public function store(Request $request)
    {
        $validator =Validator::make($request->all(),[
                'name'          => 'required|min:3',
                'email'         => 'required|email|unique:users',
                'password'      => 'required|confirmed|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*#?&]).+$/',
                'phone'         => 'required|min:10',
                'company_name'  => 'required|min:5',
                'address'       => 'required|min:5',
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
                ]);
                $customer = Customer::create([
                    'user_id'      => $user->id,   
                    'phone'        => $request->phone,
                    'company_name' => $request->company_name,
                    'address'      => $request->address,
                ]);
                DB::commit();
            }catch (\Exception $e){
                DB::rollback();
                return false;
            }
            return response()->json(['success' => 'Customer Record Added Successfully']);
        }
    }

    public function show($id)
    {
        $customer =Customer::with('getUsers')->find($id);
        $returnHTML = view('backend.customers.show')->with('customer', $customer)->render();
        return $returnHTML;
    }

    public function edit($id)
    {
        $customer =Customer::with('getUsers')->find($id);
        $returnHTML = view('backend.customers.edit')->with('customer', $customer)->render();
        return $returnHTML;
    }

   
    public function update(Request $request, $id)
    {
        $validator =Validator::make($request->all(),[
                'name'          => 'required|min:3',
                'phone'         => 'required|min:10',
                'company_name'  => 'required|min:5',
                'address'       => 'required|min:5',
                // 'email'    => ['required', Rule::unique('customers')->ignore($id)],
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else{
            $customer = Customer::with('getUsers')->find($id);
            DB::beginTransaction();
            try {
                $customer->update([ 
                    'phone'        => $request->phone,
                    'company_name' => $request->company_name,
                    'address'      => $request->address,
                    'status'       => $request->status,
                ]);   
                $customer->getusers->update([
                    'name'   => $request->name,
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
        $customer = Customer::with('getUsers')->find($id);
        $customer->getUsers->delete();
        $customer->delete();
        return redirect()->route('customers.index')->with(['message' => 'Customer Deleted Successfully']);
    }
}
