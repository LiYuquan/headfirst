<?php

/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2017/10/27
 * Time: 10:37
 * Description: 策略模式
 */

/***
 * Interface FlyBehavior
 */
interface FlyBehavior
{
    /**
     * @return mixed
     */
    public function fly();
}

/***
 * Interface QuackBehavior
 */
interface QuackBehavior
{
    /**
     * @return mixed
     */
    public function quack();
}

/***
 * Class FlyWithWings
 */
class FlyWithWings implements FlyBehavior
{
    /**
     *
     */
    public function fly()
    {
        // TODO: Implement fly() method.
        echo "i can fly";
    }
}

/***
 * Class FlyWithNothing
 */
class FlyWithNothing implements FlyBehavior
{
    /**
     *
     */
    public function fly()
    {
        // TODO: Implement fly() method.
        echo "i can't fly";
    }
}

/***
 * Class Quack
 */
class Quack implements QuackBehavior
{
    /**
     * Quack constructor.
     */
    public function quack()
    {
        // TODO: Implement quack() method.
        echo "gua gua gua";
    }
}

/***
 * Class Squeak
 */
class Squeak implements QuackBehavior
{
    /**
     *
     */
    public function quack()
    {
        // TODO: Implement quack() method.
        echo "zhi zhi zhi";
    }
}

/***
 * Class MuteQuack
 */
class MuteQuack implements QuackBehavior
{
    /**
     *
     */
    public function quack()
    {
        // TODO: Implement quack() method.
        echo "nothing to say";
    }
}

/***
 * Class Duck
 */
abstract class Duck
{
    private $_flyBehavior;
    private $_quackBehavior;

    /**
     *
     */
    public function performQuack()
    {
        $this->_quackBehavior->quack();
    }

    /**
     *
     */
    public function performFly()
    {
        $this->_flyBehavior->fly();
    }

    /**
     * @param $quackBehavior
     */
    public function setQuackBehavior($quackBehavior)
    {
        $this->_quackBehavior = $quackBehavior;
    }

    /**
     * @param mixed $flyBehavior
     */
    public function setFlyBehavior($flyBehavior)
    {
        $this->_flyBehavior = $flyBehavior;
    }
}

/***
 * Class MallardDuck
 */
class MallardDuck extends Duck
{
    /**
     * MallardDuck constructor.
     */
//    function __construct()
//    {
//        $this->setQuackBehavior(new MuteQuack());
//        $this->setFlyBehavior(new FlyWithWings());
//    }
}

/** @var  $m */
$m = new MallardDuck();
if (isset($m)) {
    $m->setQuackBehavior(new Quack());
    $m->performQuack();
}
if (isset($m)) {
    $m->setFlyBehavior(new FlyWithWings());
    $m->performFly();
}

class FlyWithRocket implements FlyBehavior{
    public function fly()
    {
        // TODO: Implement fly() method.
        echo "i am flying with a rocket";
    }
}
if (isset($m)) {
    $m->setFlyBehavior(new FlyWithRocket());
    $m->performFly();
}

/***
 * Class DuckCall 鸭鸣发生器
 */
class DuckCall{
    private $_quackBehavior;
    public function setQuackBehavior($quackBehavior){
        $this->_quackBehavior = $quackBehavior;
    }
    public function performQuack(){
        $this->_quackBehavior->quack();
    }
}
$fakeDuck = new DuckCall();
$fakeDuck->setQuackBehavior(new MuteQuack());
$fakeDuck->performQuack();