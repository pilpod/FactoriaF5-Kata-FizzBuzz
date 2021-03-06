<?php

namespace App;

class FizzBuzz {

    
    public function response(int $numb) : string
    {
        $divisibleBy3 = $numb % 3 === 0;
        $divisibleBy5 = $numb % 5 === 0;

        if($divisibleBy3 && $divisibleBy5) return 'Fizzbuzz';

        if($divisibleBy3) return 'Fizz';
        
        if($divisibleBy5) return 'Buzz';

        return $numb;
    }

} 

?>