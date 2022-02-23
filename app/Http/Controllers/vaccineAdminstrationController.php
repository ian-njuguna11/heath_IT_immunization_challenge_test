<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Vaccine;
use  App\Models\child_vaccine_join;

class vaccineAdminstrationController extends Controller
{
    public function getchildVaccine(Request $request, $child_id){
        $vaccine = child_vaccine_join::where('child_id',$request->child_id)->get();
       
        if(count($vaccine) <= 0){
            return view('childvaccinatedList',['vaccines' => $vaccine]);

        }else{
            $vaccine_name = $vaccine[0]->vaccine_id;
    
            $vaccine_name = Vaccine::where('id',  $vaccine_name)->get();
            $vac_name = $vaccine_name[0]->vaccine_name;
            return view('childvaccinatedList',['vaccines' => $vaccine], compact('vac_name'));                        
        }

    }
}
