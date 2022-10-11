<?php

namespace App\Interfaces;


interface CalculateInterface
{

    /**
     * Make arithmetic operations
     * @param string|int $num1
     * @param string|int $num2
     */
    public function calculate(int|string $num1, int|string $num2);

    /**
     * Sum two numbers
     * @param int $num1
     * @param int $num2
     * @return int|float|string
     */
    public function sum(int $num1, int $num2): int|float|string;

    /**
     * minus two numbers
     * @param int $num1
     * @param int $num2
     * @return int|float|string
     */
    public function minus(int $num1, int $num2): int|float|string;

    /**
     * multiply two numbers
     * @param int $num1
     * @param int $num2
     * @return int|float|string
     */
    public function multiply(int $num1, int $num2): int|float|string;

    /**
     * divide two numbers
     * @param int $num1
     * @param int $num2
     * @return int|float|string
     */
    public function divide(int $num1, int $num2): int|float|string;

    /**
     * power two numbers
     * @param int $num1
     * @param int $num2
     * @return int|float|string
     */
    public function power(int $num1, int $num2): int|float|string;
}
