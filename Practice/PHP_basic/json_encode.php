<?php 
	$a = array(1,2,3);
	// echo $a; // 不能直接输出array
	echo json_encode($a).'</br>';

	// 关联数组使用json_encode后
	$b = array('a' => 1,'b' => 2, 'c' => 3);
	// 其实php的关联数组不就跟js的对象或者说json一样嘛，就是key-value的集合！
	echo json_encode($b);
?>