<?php declare(strict_types=1);
require('mobile_sa_number.php');
use PHPUnit\Framework\TestCase;

final class MyTest extends TestCase
{
    public function testCheckSingleNumberWithoutPrefix(): void
    {
        $number = '333333333';

        $mobileNumber = new mobileSANumber();
        $result = $mobileNumber->check_number($number);

        print_r("---------->>>>>>>>>>".$result."<<<<<<<<<<-------");

        $this->assertSame("Valid number, added +27",$result);
    }

    public function testCheckSingleNumberWithoutPlus(): void
    {
        $number = '27333333333';

        $mobileNumber = new mobileSANumber();
        $result = $mobileNumber->check_number($number);

        print_r("---------->>>>>>>>>>".$result."<<<<<<<<<<-------");

        $this->assertSame( "Valid number, added +",$result);
    }

    public function testCheckSingleNumberInvalid(): void
    {
        $number = 'asdckjbansdc';

        $mobileNumber = new mobileSANumber();
        $result = $mobileNumber->check_number($number);

        print_r("---------->>>>>>>>>>".$result."<<<<<<<<<<-------");

        $this->assertSame("Invalid number",$result);
    }

    
}
