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
    	$sql = "UPDATE `news` SET `newstitle`='更改的标题2',`newscontent`='更改的内容2' WHERE `newsid`=3";

        // PHP与MySQL配合时中文乱码问题的解决方案
        mysqli_query($conn,'set names utf8');
        
        // 插入操作是一定会执行成功的，但是却不一定真正的影响到数据。
    	mysqli_query($conn, $sql);

        // 关闭数据库
        mysqli_close($conn);
    }
?>