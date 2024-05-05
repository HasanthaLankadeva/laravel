<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function firstfunction()
    {

        $var1 = 1;
        return $var1;
    }

    public function objectReturn()
    {

        $firstObject = [
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
        ];

        return $firstObject;
    }

    public function arrayReturn()
    {

        // elemental array
        $firstArray = [
            'name1',
            'name2',
            'name3',
        ];

        //object array
        $secondArray = [
            [
                'key1' => 'value1',
                'key2' => 'value2',
                'key3' => 'value3',
            ],
            [
                'key4' => 'value4',
                'key5' => 'value5',
                'key6' => 'value6',
            ]
        ];

        $newArray = [

            'key7' => 'value1',
            'key8' => 'value2',
            'key9' => 'value3',

        ];

        array_push($secondArray, $newArray);

        return $secondArray;
    }

    public function conditionalstatement(Request $request)
    {

        $validateddata = $request->validate([
            'number1' => 'required',
            'number2' => 'required',
        ]);

        if ($validateddata['number1'] < $validateddata['number2']) {
            return 'YES';
        } else if ($validateddata['number1'] === $validateddata['number2']) {
            return 'EQUAL';
        } else {
            return 'NO';
        }
    }

    public function loopstatement()
    {

        $newArray = array();

        $secondArray = [
            [
                'key1' => 'value1',
                'key2' => 'value2',
                'key3' => 'value3',
            ],
            [
                'key1' => 'value4',
                'key2' => 'value5',
                'key3' => 'value6',
            ]
        ];

        /*$total = 0;

        for($i = 0; $i <= 10; $i++){
            $total = $total + $i;
        }

        $i = 0;
        while ($i <= 10) {
            $i++;
        }*/

        foreach ($secondArray as $value) {
            $value['key1'] = 'New Value';
            array_push($newArray, $value);
        }

        return $newArray;
    }
}
