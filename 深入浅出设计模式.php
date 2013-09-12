<?php
1.设计一个鸭子的基类 ，假设所有的鸭子都会游水和呱呱叫，但是每个鸭子的外观肯定都是不同的
解决办法

abstract class duck{
	function swim(){//游水
		............;
	}

	function  quack(){ //呱呱叫
		........;
	}
	abstract function display(); //抽象方法留给子类去具体实现
} 

class duckA extends duck{
	function display(){

		...............; 
	}

}

2.想让鸭子飞起来(想法：直接在父类那里添加fly（）方法)
abstract class duck{
	function swim(){
		..............;
	}

	function quack(){
		.......;
	}
	function fly(){
		.......;
	} 

	abstract function display();
}

3.问题来啦，不是所有的鸭子都会飞...
初步解决办法，在子类中
