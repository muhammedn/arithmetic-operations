<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\CalculateInterface;
use Illuminate\Http\Response;

class CalculatingController extends Controller implements CalculateInterface
{

    /**
     * Make arithmetic operations
     * @param mixed $num1
     * @param mixed $num2
     * @return Response
     */

    public function calculate(mixed $num1, mixed $num2): Response
    {

        $num1 = intval($num1);
        $num2 = intval($num2);

        $response = [

            'sum' => $this->sum($num1,$num2),
            'minus' => $this->minus($num1,$num2),
            'multiply' => $this->multiply($num1,$num2),
            'divide' => $this->divide($num1,$num2),
            'power' => $this->power($num1,$num2),
        ];

        return response($response,200);
    }

    public function sum(int $num1, int $num2): int|float|string
    {
        return $num1 + $num2;
    }

    public function minus(int $num1, int $num2): int|float|string
    {
        return $num1 - $num2;
    }

    public function multiply(int $num1, int $num2): int|float|string
    {
        return $num1 * $num2;
    }

    public function divide(int $num1, int $num2): int|float|string
    {
        return $num1 / $num2;
    }

    public function power(int $num1, int $num2): int|float|string
    {
        $value = $num1 ** $num2;

        if(is_nan($value) || is_infinite($value))
            return 'infinite or nan number' ;

        return $num1 ** $num2;
    }


    /**
     * Validate if no numbers entered
     * @return Response
     */

    public function validateNonValues(): Response
    {

        $response = 'Please enter 2 numbers';

        return response($response,400);

    }
}
