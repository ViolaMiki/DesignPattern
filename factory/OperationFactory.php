<?php
class OperationFactory{


	public static function creatOperate($operate){
        $operation = null;
		switch ($operate){
			case "+":
				$operation = new OperationAdd();
				break;
			case "-":
                $operation = new OperationSub();
				break;
			case "*":
                $operation = new OperationMul();
				break;
			case "/":
                $operation = new OperationDiv();
				break;
		}
		return $operation;
	}
}

?>
