<?php


declare(strict_types=1);

class NthPrimeTest extends PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once './src/nthprime.php';
    }

    public function testFirstPrime(): void
    {
        $this->assertEquals(13, getPrimo(6));
    }
    
}