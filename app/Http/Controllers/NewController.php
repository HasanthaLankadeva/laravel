<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class NewController extends Controller
{
    // show data
    public function showData(Request $request)
    {

        $validateddata = $request->validate([
            'description' => 'required'
        ]);

        $test = Test::where(
            'description', 
            $validateddata['description']
        )->get();

        return response()->json([
            'data' => $test,
        ]);
    }

    // update specific row

    public function updateData(Request $request)
    {

        $validateddata = $request->validate([
            'id' => 'required',
            'description' => 'required',
        ]);

        $test = Test::where(
            'id', 
            $validateddata['id']
        )->first();
        
        $test->description = $validateddata['description'];
        
        $test->save();

        return response()->json([
            'data' => $test,
        ]);
    }

     // delete specific row

     public function deleteData(Request $request)
     {
 
         $validateddata = $request->validate([
             'id' => 'required',
         ]);
 
         $test = Test::where(
             'id', 
             $validateddata['id']
         )->first();
         
         $test->delete();
     }

     // where between
     public function betweenData(Request $request)
    {

        $validateddata = $request->validate([
            'startdate' => 'required',
            'enddate' => 'required'
        ]);

        $test = Test::whereBetween(
            'created_at', 
            [$validateddata['start_date'] , $validateddata['end_date']]
        )->get();

        return response()->json([
            'data' => $test,
        ]);
    }

}
