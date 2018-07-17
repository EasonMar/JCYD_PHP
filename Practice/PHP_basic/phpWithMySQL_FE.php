<?php 
	// 设置http报头
	header("Content-type:application/json");

	// 获取参数
	$newstitle = $_REQUEST['newstitle'];
	$newsimg = $_REQUEST['newsimg'];
	$newscontent = $_REQUEST['newscontent'];
	$addtime = $_REQUEST['addtime'];

	// 设置数据库配置
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = 'phplesson';

    // 创建数据库连接
    $conn = mysqli_connect($servername, $username, $password, $dbname);
     
    // 检测连接
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
    	$sql = "INSERT INTO `news`(`newstitle`, `newsimg`, `newscontent`, `addtime`) VALUES ('${newstitle}','${newsimg}','${newscontent}','${addtime}')";

    	// PHP与MySQL配合时中文乱码问题的解决方案
        mysqli_query($conn,'set names utf8');

    	if (mysqli_query($conn, $sql)) {
		    echo "新记录插入成功";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

        // 关闭数据库
        mysqli_close($conn);
    }
?>