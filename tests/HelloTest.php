<?php
class HelloTest extends PHPUnit_Framework_TestCase{
	protected $hello;
	public function setUp(){
		$this->hello = new \Dracony\Demo\Hello();
	}

	public function testWorld(){
		$this->assertSame('world',$this->hello->world());
	}
	/**
	*@covers Calculator
	*/
	public function testCalculator(){
		$this->assertEqual(5,$this->hello->calculator(2,2));
	}
}
