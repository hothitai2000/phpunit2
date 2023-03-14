<?php
function phuongtrinhbac1($a, $b)
{
    if ($a == 0) {
        throw new Exception("a khong duoc bang 0");
    }
    return -$b / $a;
}
use PHPUnit\Framework\TestCase;

class ptb1 extends TestCase
{
    public function testptb1()

    {   
        

        $this->assertEquals(2, phuongtrinhbac1(2, -4));
        $this->assertEquals(-1.5, phuongtrinhbac1(3, 4.5));
        $this->expectException(Exception::class);
        phuongtrinhbac1(0, 5);

    }
}
?>