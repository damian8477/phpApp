<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');

        if (is_numeric($number1) && is_numeric($number2)) {
            $sum = $number1 + $number2;
            return "{$number1} + {$number2} equals: {$sum}";
        } else {
            return "Give me two numbers.";
        }
    }

    public function test()
    {
        return "Hello world";
    }
}
