<?php
	header("Content-type:application/json");
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	// 使用关联数组装载对象，传到前端就是对象了
	echo json_encode(array('name' => $username,'pass' => $password ));
?>