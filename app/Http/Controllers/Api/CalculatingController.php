<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\CalculateInterface;
use Illuminate\Http\Request;

class CalculatingController extends Controller implements CalculateInterface
{
    //


    public function calculate(int|string $num1, int|string $num2): \Symfony\Component\HttpFoundation\Response
    {
        // TODO: Implement calculate() method.
    }

    public function sum(int $num1, int $num2): int
    {
        // TODO: Implement sum() method.
    }

    public function minus(int $num1, int $num2): int
    {
        // TODO: Implement minus() method.
    }

    public function multiply(int $num1, int $num2): int
    {
        // TODO: Implement multiply() method.
    }

    public function divide(int $num1, int $num2): int
    {
        // TODO: Implement divide() method.
    }

    public function power(int $num1, int $num2): int
    {
        // TODO: Implement power() method.
    }
}
