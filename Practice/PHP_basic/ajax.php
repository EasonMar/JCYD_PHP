<?php
	header("Content-type:application/json");
	header('Access-Control-Allow-Origin:*'); // 允许跨域访问
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	// 使用关联数组装载对象，传到前端就是对象了
	echo json_encode(array('name' => $username,'pass' => $password ));
?>