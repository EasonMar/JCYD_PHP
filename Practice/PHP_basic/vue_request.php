<?php 
	header('content-type:application/json;charset=utf8');
	header('Access-Control-Allow-Origin:*'); // 允许跨域访问
	$arr=array(
		'status'=>true,
		'errMsg'=>'',
		'member'=>array(
			array(
				'name'=>'李逍遥',
				'gender'=>'男',
			),
			array(
				'name'=>'赵灵儿',
				'gender'=>'女',
			),
		)
	);

	echo json_encode($arr);

 ?>