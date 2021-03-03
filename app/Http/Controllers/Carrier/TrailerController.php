<?php

namespace App\Http\Controllers\Carrier;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Validator;
use Hash;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\File; 
use App\Models\Trailer;
use Auth;

class TrailerController extends Controller
{
     public function index()
    {
        $trailers = Trailer::get();
        return view('backend.carriers.trailers.index', compact('trailers'));
    }

    public function create(){
        $returnHTML = view('backend.carriers.trailers.create')->render();
        return $returnHTML;
    }

    public function store(Request $request)
    {
        $validator =Validator::make($request->all(),[
                'type'           => 'required',
                'trailer_no'     => 'required|unique:trailers',
                'frieght_weight' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
            $trailer = Trailer::create([
                'user_id'        => Auth::user()->id,
                'type'           => $request->type,
                'name'           => $request->name,
                'trailer_no'     => $request->trailer_no,
                'frieght_weight' => $request->frieght_weight,
                'status'         => '1'
            ]);
            return response()->json(['success' => 'Trailer Added Successfully']);
    }

    public function show($id){
        $trailer = Trailer::find($id);
        $returnHTML = view('backend.carriers.trailers.show')->with([
            'trailer' => $trailer
            ])->render();
            return $returnHTML;
    }

    public function edit($id){
        $trailer = Trailer::find($id);
        $returnHTML = view('backend.carriers.trailers.edit')->with([
            'trailer' => $trailer
            ])->render();
            return $returnHTML;
    }

    public function update(Request $request, $id)
    {
        $validator =Validator::make($request->all(),[
                'type'           => 'required',
                'trailer_no'     => ['required', Rule::unique('trailers')->ignore($id)],
                'frieght_weight' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
            $trailer = Trailer::find($id);
            $trailer->update([
                'user_id'        => $trailer->user_id,
                'type'           => $request->type,
                'name'           => $request->name,
                'trailer_no'     => $request->trailer_no,
                'frieght_weight' => $request->frieght_weight,
                'status'         => $request->status,
            ]);
            return response()->json(['success' => 'Trailer Updated Successfully']);
    }

    public function destroy($id)
    {
        $trailer = Trailer::find($id);
        $trailer->delete();
        return redirect()->route('trailers.index')->with(['message' => 'Trailer Deleted Successfully']);
    }
}
