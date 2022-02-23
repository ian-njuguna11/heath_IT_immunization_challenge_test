<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Vaccine;

class vaccinneController extends Controller
{
    //
    public function index(Request $request){
        $vaccines = Vaccine::all();

        return view("vaccine",['vaccines'=>$vaccines]);
    }


    public function create(Request $request){
        $vaccine = new Vaccine();
        $vaccine->vaccine_type = $request->vaccineType;
        $vaccine->save();

        return view("vacinne")->with('success', 'Item Created');
        
    }

    public function getVaccine($id){
        $Vaccine = Vaccine::all();

        $row = Vaccine::where('id', $id)
            ->first();

        $data = Vaccine::find($id);

        return view('edit_vaccine_type',['data' => $data]);
    }

    public function update(){

        $request->validate([
            'vaccine_type' => 'required',
        ]);

        Vaccine::where('id',$request->id)->update([
            'vaccine_type'=>$request->input('vaccineType'),
        ]);

        return redirect('vaccine');
    
    }

    public function delete(Request $request,$id){
        $vaccine = Vaccine::find($id);
        
        $vaccine->delete();
        return redirect('vaccine-list')->with('success', 'Item Removed');
    }
}
