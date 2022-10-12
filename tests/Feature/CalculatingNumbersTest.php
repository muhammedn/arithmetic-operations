<?php

namespace Tests\Feature;

use App\Http\Controllers\Api\CalculatingController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatingNumbersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_sum_two_numbers()
    {
        $sumOperation = new CalculatingController();

        $result = $sumOperation->sum(mt_rand(), mt_rand());

        $this->assertTrue(is_int($result) || is_float($result));

    }

    public function test_minus_two_numbers()
    {
        $minusOperation = new CalculatingController();

        $result = $minusOperation->minus(mt_rand(), mt_rand());

        $this->assertTrue(is_int($result) || is_float($result));
    }

    public function test_multiply_two_numbers()
    {
        $multiplyOperation = new CalculatingController();

        $result = $multiplyOperation->multiply(mt_rand(), mt_rand());

        $this->assertTrue(is_int($result) || is_float($result));

    }

    public function test_divide_two_numbers()
    {
        $divideOperation = new CalculatingController();

        $result = $divideOperation->divide(mt_rand(), mt_rand());

        $this->assertTrue(is_int($result) || is_float($result));

    }

    public function test_power_two_numbers()
    {
        $powerOperation = new CalculatingController();

        $result = $powerOperation->power(mt_rand(), mt_rand());

        $this->assertTrue(is_int($result) || is_float($result) || is_string($result));

    }

    public function test_calculate_two_numbers()
    {

        $this->test_sum_two_numbers();
        $this->test_minus_two_numbers();
        $this->test_multiply_two_numbers();
        $this->test_divide_two_numbers();
        $this->test_power_two_numbers();


    }
}
