<?php
require './operation.php';

class OperationAdd extends Operation{

	public function get_result(){
		$result = $this->get_numberA() + $this->get_numberB();
		return $result;
	}
}

class OperationDiv extends Operation{

	public function get_result(){
		if(!$this->get_numberB()){
			throw new Exception ("除数不能为零");
		}
		$result = $this->get_numberA() / $this->get_numberB();
		return $result;
	}
}

class OperationSub extends Operation{

	public function get_result(){
		$result = $this->get_numberA() - $this->get_numberB();
		return $result;
	}
}

class OperationMul extends Operation{

	public function get_result(){
		$result = $this->get_numberA() * $this->get_numberB();
		return $result;
	}
}
?>
