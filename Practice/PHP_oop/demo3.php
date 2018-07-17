<?php  
// PHP OOP 封装性

/**
* 定义一个类，学习 public private protected修饰符
*/
class Person
{
	public $x = 'x';
	private $name = "xiaowang"; 
	private $age = 27; // 私有的
	private $kk = 99;
	protected $money = 10; // 受保护的
	
	// 私有的成员方法：不能在类外部直接被访问
	private function getAge()
	{
		return $this->age;
	}

	// 被保护的成员方法：不能在类外部直接被访问
	protected function getMoney()
	{
		return $this->money;
	}

	// 继承的时候private和protected之间就有区别了
	
	public function userCard()
	{
		echo "name->".$this->name."age->".$this->getAge()."money->".$this->getMoney();
		echo "kk->".$this->kk;
	}

	// 魔术方法只针对protected private属性？貌似只针对private属性呢？
	// __set有2个参数
	public function __set($key, $value)
	{
		echo "<hr/>";
		echo $key.'>>>'.$value;
		if($key == "name" && $value == "laowang"){
			$this->name = "xiaowang";
		}
	}

	// __get只有1个参数
	public function __get($key)
	{
		if($key == "age"){
			return "girl not tell you";
		}
	}

	// __isset只有1个参数
	public function __isset($key)
	{
		if($key == "age"){
			return true;
		}
	}

	// __unset也只有1个参数
	public function __unset($key)
	{
		if($key == "kk"){
			unset($this->kk);
		}
	}
}
$xw = new Person();

// echo $xw->age; // Fatal error: Cannot access private property Person::$age
// echo $xw->getAge(); // Fatal error: Call to private method Person::getAge() from context
// echo $xw->money; // Fatal error: Cannot access protected property Person::$money 
// echo $xw->getMoney(); // Fatal error: Call to protected method Person::getMoney() from context

echo $xw -> userCard(); // age->27money->10


$xw -> name = "laowang";

echo "<hr/>";
echo $xw->age;

echo "<hr/>";
var_dump(isset($xw->age));

echo "<hr/>";
var_dump(isset($xw->x));

echo "<hr/>";
unset($xw->kk);
echo $xw -> userCard();

?>