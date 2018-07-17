<?php 
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	echo "用户名为${username}, 密码为${password}";

	// 不要经常使用$_REQUEST,如果不确定_GET/POST,接收数据时候,可以这样:
	// if($_SERVER['REQUEST_METHOD']=="POST"){  
	//     echo $_POST['username'];  
	// }else if($_SERVER['REQUEST_METHOD']=="GET"){  
	//     echo $_GET['username'];  
	// }  
?>