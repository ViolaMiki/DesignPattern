<?php
abstract class Operation{
	private $numberA = 0;
	private $numberB = 0;

	public function set_numberA($numberA){
		$this->numberA = $numberA;
	}

	public function get_numberA(){
		return $this->numberA;
	}

	public function set_numberB($numberB){
		$this->numberB = $numberB;
	}

	public function get_numberB(){
		return $this->numberB;
	}

	abstract protected function get_result();
}
?>
