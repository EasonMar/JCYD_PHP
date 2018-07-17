<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = 'phplesson';
     
    // 创建连接
    $conn = mysqli_connect($servername, $username, $password, $dbname);
     
    // 检测连接
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
    	$sql = "DELETE FROM `news` WHERE `newsid`=4";
    	
    	if (mysqli_query($conn, $sql)) {
		    echo "记录删除成功";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

        // 关闭数据库
        mysqli_close($conn);
    }
?>