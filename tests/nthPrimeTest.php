<?php


namespace Tests;

use App\nthPrime;
use PHPUnit\Framework\TestCase;

class nthPrimeTest extends TestCase {
    
    public function test_nth_prime () {
        // given 
        $position > 0;
        $primeNumber = new Position;
        // when
        $primeNumber = $position-> getprimeNumber($primeNumber);
        // then
        $this->assertEquals('nthprime', $primeNumber);
    }

}



?>