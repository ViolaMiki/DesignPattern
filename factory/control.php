<?php
require_once './OperationFactory.php';
require_once './OperationMain.php';

$oper = OperationFactory::creatOperate( $_POST['operator'] );
$oper->set_numberA( $_POST['num1'] );
$oper->set_numberB( $_POST['num2'] );
$result = $oper->get_result();
var_dump($result);
?>
