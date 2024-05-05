<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class TestController extends Controller
{
    // store test data

    public function store(Request $request)
    {

        // create with object

        $validateddata = $request->validate([
            'description' => 'required'
        ]);

        // $test = Test::create($validateddata);

        // return response()->json([
        //     'data' => $test
        // ]);

        // create with model object

        $testobject = new Test();
        $testobject->description = $validateddata['description'];
        $testobject->save();

        return response()->json([
            'data' => $testobject
        ]);
    }

    public function update(Request $request, Test $id)
    {
        $validateddata = $request->validate([
            'description' => 'required'
        ]);

        $id->update($validateddata);

        return response()->json([
            'data' => $validateddata
        ]);
    }

    public function index()
    {
        // get all data
        /*$items = Test::all();

        return response()->json([
            'data' => $items
        ]);*/

        // select data with column
        /*$items = Test::select('description')->get();
        return response()->json([
            'data' => $items
        ]);*/

        $tests = QueryBuilder::for(Test::class)
        ->allowedFilters('description')
        ->get();

        return response()->json([
            'data' => $tests
        ]);
    }

    public function delete(Test $id)
    {
        $id->delete();
    }
}
