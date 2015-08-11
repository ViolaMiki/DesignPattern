<?php
require './operation.php'

class OperationAdd extends Operation{

	protected function get_result(){
		$result = $parent->get_numberA() + $parent->get_numberB();
		return $result;
	}
}

class OperationDiv extends Operation{

	protected function get_result(){
		if(!$parent->get_numberB()){
			throw new Exception ("除数不能为零");
		}
		$result = $parent->get_numberA() / $parent->get_numberB();
		return $result;
	}
}

class OperationSub extends Operation{

	protected function get_result(){
		$result = $parent->get_numberA() - $parent->get_numberB();
		return $result;
	}
}

class OperationMul extends Operation{

	protected function get_result(){
		$result = $parent->get_numberA() * $parent->get_numberB();
		return $result;
	}
}
?>
