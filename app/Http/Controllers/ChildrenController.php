<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Models\Children;

class ChildrenController extends Controller
{
    
    public function index(Request $request){
        $children = Children::all();

        return view("children",['children'=>$children]);
    }


    public function create(Request $request){
        $children = new Children();
        $children->name = $request->name;
        $children->DOB = $request->DOB;
        $vaccine->save();

        return view("children")->with('success', 'Item Created');
        
    }

    public function getVaccines($id){
        $Children = Children::all();

        $row = Children::where('id', $id)
            ->first();

        $params = [
            'name' => $row->name,
            'DOB' => $row->name,
        ];

        $data = Children::find($id);

        return view('edit_child',['data' => $data],$params);
    }

    public function update(){

        $request->validate([
            'name' => 'required',
            'DOB' => 'required',
        ]);

        Children::where('id',$request->id)->update([
            'name'=>$request->input('name'),
            'DOB'=>$request->input('DOB')
        ]);

        return redirect('children\'s');
    
    }

    public function delete(Request $request){
        $vaccine = Children::find($id);
        
        $vaccine->delete();
        return redirect('children\'s')->with('success', 'Item Removed');
    
    }

}
