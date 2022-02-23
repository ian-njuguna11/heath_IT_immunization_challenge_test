<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Children;

class childController extends Controller
{
    public function index(Request $request){
        $children = Children::all();

        return view("children",['childrens'=>$children]);
    }


    public function create(Request $request){
        $children = new Children();
        $children->name = $request->name;
        $children->DOB = $request->DOB;
        $vaccine->save();

        return view("children")->with('success', 'Item Created');
        
    }

    public function getChild($id){
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

    public function update(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'DOB' => 'required',
        ]);

        Children::where('id',$request->id)->update([
            'name'=>$request->name,
            'DOB'=>$request->DOB
        ]);

        return redirect('children-list');
         // dd($data);
    
    }

    public function delete(Request $request,$id){
        $child = Children::find($id);
        
        $child->delete();
        return redirect('children-list')->with('success', 'Item Removed');
    
    }
}
