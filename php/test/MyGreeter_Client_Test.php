<?php

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
    
    public function test(){

        $time = date('H',time());
        if((12 > $time) && ($time > 0)){
            echo 'Good morning';
        }elseif ((12 < $time) && ($time < 18)) {
            echo 'Good afternoon';
        }else{
            echo 'Good evening';
        }
    }
}

$a = new MyGreeter_Client_Test();

$b = $a->test();
