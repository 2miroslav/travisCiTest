<?php
class HelloTest extends PHPUnit_Framework_TestCase{
	protected $hello;
	public function setUp(){
		$this->hello = new \Dracony\Demo\Hello();
	}

	public function testWorld(){
		$this->assertSame('world',$this->hello->world());
	}
	public function testCalculator(){
		$this->assertEquals(5,$this->hello->calculator(3,2));
	}
	/**
	*@covers $this->hello::returnTrue
	*/
	public function testReturnTrue(){
		$this->assertEquals(true,$this->hello->returnTrue());
	}
}
