<?php
class HelloTest extends PHPUnit_Framework_TestCase{
	protected $hello;
	public function setUp(){
		$this->hello = new \Dracony\Demo\Hello();
	}

	public function testWorld(){
		$this->assertSame('echoo',$this->hello->world());
	}
}
