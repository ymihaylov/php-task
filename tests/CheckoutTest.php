<?php

use App\Checkout;

final class CheckotTest extends PHPUnit_Framework_TestCase {
    public function testTotalPriceOfGivenItems()
    {
        $this->assertEquals((new Checkout('A'))->total(), 50);
        $this->assertEquals((new Checkout('AB'))->total(), 80);
        $this->assertEquals((new Checkout('CDBA'))->total(), 115);
        $this->assertEquals((new Checkout('AA'))->total(), 100);
        $this->assertEquals((new Checkout('AAA'))->total(), 130);
        $this->assertEquals((new Checkout('AAA'))->total(), 130);
        $this->assertEquals((new Checkout('AAAA'))->total(), 180);
        $this->assertEquals((new Checkout('AAAAA'))->total(), 230);
        $this->assertEquals((new Checkout('AAAAAA'))->total(), 260);
        $this->assertEquals((new Checkout('AAAB'))->total(), 160);
        $this->assertEquals((new Checkout('AAABB'))->total(), 175);
        $this->assertEquals((new Checkout('AAABBD'))->total(), 190);
        $this->assertEquals((new Checkout('DABABA'))->total(), 190);
    }
}