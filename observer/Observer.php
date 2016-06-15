<?php
/**
 * Created by PhpStorm.
 * User: miki
 * Date: 2016-6-15
 * Time: 22:20
 */
interface Subject
{
    public function attach($Observer);
    public function detach($Observer);
    public function notify();
}

class Boss implements Subject
{
    private $observer = array();

    public function attach($Observer)
    {
        $this->observer[] = $Observer;
    }

    public function detach($Observer)
    {
        $key = array_search( $Observer, $this->observer );
        if ($key){
            unset($this->observer[$key]);
        }
    }
    public function notify(){
        foreach( $this->observer as $observer )
        {
            $observer->update();
        }
    }
}

abstract class Observer
{
    protected $name;
    protected $subject;

    function Observer($name, $subject){
        $this->name = $name;
        $this->subject = $subject;
    }

    abstract function update();
}

class AObserver extends Observer
{
    function AObserver($name, $subject){
        parent::Observer($name, $subject);
    }

    function update()
    {
        echo $this->name."收到通知";
    }
}

class BObserver extends Observer
{
    function BObserver($name, $subject){
        parent::Observer($name, $subject);
    }

    function update()
    {
        echo $this->name."收到通知";
    }
}

$boss = new Boss();

$a = new AObserver('a',$boss);
$b = new BObserver('b',$boss);

$boss->attach($a);
$boss->attach($b);

$boss->notify();
