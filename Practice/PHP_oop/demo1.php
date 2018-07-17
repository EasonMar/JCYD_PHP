<?php 
/**
 * 类的声明
 */
class Person
{
	public $age;

	public function say($word) 
	{
		echo "she say ${word}";
		echo "<br/>";
		echo "she say {$word}";
	}

	// php中访问对象属性、方法使用 -> 
	public function info()
	{
		$this -> say("Hi");
		return $this -> age;
	}
}

$xiaoming = new Person();
$xiaoming -> age = 22;
$age = $xiaoming -> info();
echo "<br/>";
echo $age;
?>