<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
	// 设置字符编码
	$conn->query("set names utf8");
	// 检测连接
	if ($conn->connect_error) {
	    die("连接失败: " . $conn->connect_error);
	} 


	// 判断查询还是插入
	$action = $_POST["action"];
	
	switch ($action) {
		case 'select':
			// 查询
		    $sql = "SELECT num FROM praise";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// 输出数据
				while($row = $result->fetch_assoc()) {
					$num = array('num' => $row["num"],'error'=> 0);
					echo json_encode($num);
				}
			} else {
				// 插入一条数据！
				$sql = "INSERT INTO praise (num) VALUES (0)";
				if ($conn->query($sql) === TRUE) {
				    $num = array('num' => 0,'error'=> 0);
					echo json_encode($num);
				} else {
				    echo '{"error":"1"}';
				}
				
			}
			break;
		case 'update':
			$num = $_POST["num"];
			// 更新
			$sql = "UPDATE praise SET num = '{$num}'";
			$conn->query($sql);
			if(mysqli_affected_rows($conn) > 0){
				echo '{"error":"0"}';
			}else{
				echo '{"error":"1"}';
			}
			break;
		default:
			break;
	}
		

	$conn->close();
 ?>