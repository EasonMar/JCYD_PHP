<?php  
/**
* 父类
*/
class Person
{
	public $name;
	private $age; // 私有的 继承不下去的
	protected $money; // 可以继承下去
	function __construct($name, $age, $money)
	{
		$this -> name = $name;
		$this -> age = $age;
		$this -> money = $money;
	}

	public function cardInfo(){
		echo "name->".$this-> name."age->".$this-> age."money->".$this-> money;
	}
}

$s = new Person('人类', 14, 1000);
$s -> cardInfo();

/**
* 子类
*/
class Yellow extends Person
{
	
	function __construct($name, $age, $money)
	{
		parent::__construct($name, $age, $money);
	}

	// php重写(overwrite)
	public function cardInfo($pp){
		// php实现重载的办法
		parent::cardInfo();
		echo $pp;
	}
}
$y = new Yellow('黄种人', 50, 199);
echo $y->age; // Notice: Undefined property: Yellow::$age，没继承
echo $y->money; // Cannot access protected property Yellow， 有继承
?>