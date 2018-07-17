<?php  
/**
* 本demo是为了测试构造方法和析构方法
*/
class Person
{
	// 构造函数，当这个类new的时候自动执行
	public function __construct($name, $age)
	{
		echo('hello '.$name);
		echo "<hr/>";
		$this -> age = $age;
		$this -> name = $name;
	}

	public function data(){
		return $this -> age;
	}

	// 析构函数：进行资源的释放、数据库的关闭
	// 对象被销毁的时候执行，没有代码去运行的时候
	public function __destruct(){
		echo "bye bye {$this -> name}";
		echo "<hr/>";
	}
}

new Person("xiaoming", 30);
new Person("xiaohong", 18);
?>