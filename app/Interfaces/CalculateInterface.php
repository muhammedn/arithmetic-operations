<?php

namespace App\Interfaces;


interface CalculateInterface
{

    /**
     * Make arithmetic operations
     * @param string|int $num1
     * @param string|int $num2
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function calculate(int|string $num1, int|string $num2): \Symfony\Component\HttpFoundation\Response;

    /**
     * Sum two numbers
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function sum(int $num1, int $num2): int;

    /**
     * minus two numbers
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function minus(int $num1, int $num2): int;

    /**
     * multiply two numbers
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function multiply(int $num1, int $num2): int;

    /**
     * divide two numbers
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function divide(int $num1, int $num2): int;

    /**
     * power two numbers
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function power(int $num1, int $num2): int;
}
