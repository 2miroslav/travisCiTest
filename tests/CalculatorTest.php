<?php
 class CalculatorTest extends PHPUnit_Framework_TestCase{
 	private $calc = null;

 	public function setUp(){
 		$this->calc = new JomWeb\Calculator();
    }

    public function tearDown(){
 		$this->calc = null;
    }
    /**
     * @test
     */
    public function testInstanceOf(){
    	$this->assertInstanceOf('JomWeb\Calculator', $this->calc);
    }
    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgument(){
    	$this->calc->add('A',2);
    }
    /**
     * @test
     */
    public function testAssertion(){
    	$this->assertEquals(5,$this->calc->add(2,3));
    }
 }