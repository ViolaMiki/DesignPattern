<?php
$textType = new TextDecoratorRed();
$td = new TextDecorator();
$td->setText( $textType );

$type = $td->type();


abstract class base {
    abstract function type();
}

class text extends base{
    protected $type;
    public function type(){
        $this->type['text'] = "这是文字";   
        return $this->type;
    }
}

class TextDecorator extends text{
    protected $text;
    
    public function setText( $text ){
        $this->text = $text;
    }
    
    public function type(){
        if ( $this->text != null){
             $this->type = $this->text->type();
        }
        return $this->type;
    }
}

class TextDecoratorBlue extends text{
    public function type(){
        $this->type = parent::type();
        $this->type['color'] = "blue";
        return $this->type;
    }
}

class TextDecoratorRed extends text{
    public function type(){
        $this->type = parent::type();
        $this->type['color'] = "red";
        return $this->type;
    }
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="UTF-8">
  <script src="../jquery-1.11.3.js"></script>
</head>

<body>
    <div style="color:<?php echo $type['color']?>"><?php echo $type['text']?></div>
</body>
</html>