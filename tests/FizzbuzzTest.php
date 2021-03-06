<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzbuzzTest extends TestCase {

	public function test_firstTest() 
	{
		$this->assertEquals(2, 2);
	}

	public function test_if_numb_divible_by_3_say_Fizz()
	{
		$fizzbuzz = new FizzBuzz;

		$response = $fizzbuzz->response(3);

		$this->assertEquals('Fizz', $response);
	}

	public function test_if_numb_divible_by_5_say_Buzz()
	{
		$fizzbuzz = new FizzBuzz;

		$response = $fizzbuzz->response(5);

		$this->assertEquals('Buzz', $response);
	}

	public function test_if_numb_divible_by_3And5_say_Fizzbuzz()
	{
		$fizzbuzz = new FizzBuzz;

		$response = $fizzbuzz->response(15);

		$this->assertEquals('Fizzbuzz', $response);
	}

	public function test_if_numb_not_divible_by_3And5_return_number()
	{
		$fizzbuzz = new FizzBuzz;

		$response = $fizzbuzz->response(7);

		$this->assertEquals( 7, $response);
	}


}


