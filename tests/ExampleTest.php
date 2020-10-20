<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class ExampleTest extends TestCase {

	public function test_example(
	) {
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->multiply_by(8);

		$this->assertEquals(8, $result);
	}


}


