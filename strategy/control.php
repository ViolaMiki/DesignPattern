<?php
$cashContext = new CashContext( $_POST['type']);
$result = $cashContext->ContextResult( $_POST['price']);
echo $result;

class CashContext{
    private $cs;
    public function CashContext( $type ){
        switch ( $type ){
            case 'nomal':
                $this->cs = new CashNomal();
                break;
            case 'rebate':
                $this->cs = new CashRebate(0.8);
                break;
            case 'return':
                $this->cs = new CashReturn(300,100);
                break;
        }
    }
    
    public function ContextResult( $money ){
        return $this->cs->acceptCash( $money );
    }
}

abstract class CashSuper{
    abstract protected function acceptCash( $money );
}

class CashNomal extends CashSuper{
    public function acceptCash( $money ){
        return $money;
    }
}

class CashRebate extends CashSuper{
    private $moneyRebate;
    public function CashRebate( $moneyRebate ){
        $this->moneyRebate = $moneyRebate;
    }
    
    public function acceptCash( $money ){
        return $money*$this->moneyRebate;
    }
}

class CashReturn extends CashSuper{
    private $moneyCondition;
    private $moneyReturn;
    public function CashReturn( $moneyCondition, $moneyReturn){
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }
    
    public function acceptCash( $money ){
        if( $money >= $this->moneyCondition)
            $money = $money - ( (int)($money/$this->moneyCondition) * $this->moneyReturn);
        return $money;
    }
}
?>