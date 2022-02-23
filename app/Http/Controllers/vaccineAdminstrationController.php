<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Vaccine;
use  App\Models\child_vaccine_join;

class vaccineAdminstrationController extends Controller
{
    public function getchildVaccine(Request $request, $id){
        $vaccine = child_vaccine_join::where('child_id',$request->id)->get();
        
        return view('childvaccinatedList',['vaccines' => $vaccine]);
    }
}
