<?php namespace JomWeb;
use InvalidArgumentException;


class Calculator {

	public function Add($x,$y){
		if(!is_int($x)||!is_int($y)){
			throw new InvalidArgumentException("Pleas set a integer");
		}
		return $x+$y;
	}
}