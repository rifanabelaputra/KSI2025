<?php 
// tests/ContohTest.php

use PHPUnit\Framework\TestCase;

class ContohTest extends TestCase
{
    public function testAngkaAdalahSama()
    {
        $a = 1;
        $b = 1;
        $this->assertEquals($a, $b, "Angka 1 dan 1 harus sama.");
    }
}