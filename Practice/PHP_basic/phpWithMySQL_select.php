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
    	$sql = "SELECT * FROM `news`";
        $result = mysqli_query($conn, $sql);
         
        // 返回结果集中行的数量，判断有无数据读出来！
        if (mysqli_num_rows($result) > 0) {
            // 输出数据：从结果集中取得一行作为关联数组
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["newsid"]. " - title: " . $row["newstitle"]." - content: " . $row["newscontent"]. " " . " - addtime: " .$row["addtime"]. "<br>";
            }
        } else {
            echo "0 结果";
        }
         
        mysqli_close($conn);
    }
?>