<?php
abstract class Operation{
	private $numberA = 0;
	private $numberB = 0;

	public set_numberA($numberA){
		$this->numberA = $numberA;
	}

	public get_numberA($numberA){
		return $this->numberA;
	}

	public set_numberB($numberB){
		$this->numberB = $numberB;
	}

	public get_numberB($numberB){
		return $this->numberB;
	}

	abstract protected function get_result();
}
?>
