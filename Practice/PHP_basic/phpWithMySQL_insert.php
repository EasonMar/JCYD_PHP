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
    	$sql = "INSERT INTO `news`(`newstitle`, `newsimg`, `newscontent`, `addtime`) VALUES ('First_news','http://www.runoob.com/images/lamp.jpg','This is my first news,the content is over','2018-5-27')";
    	
    	if (mysqli_query($conn, $sql)) {
		    echo "新记录插入成功";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

        // 关闭数据库
        mysqli_close($conn);
    }
?>