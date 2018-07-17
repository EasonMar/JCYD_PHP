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
        // echo "连接成功";
        // 判断查询还是更新
        $action = $_POST["action"];
        switch ($action) {
            // 查询当前点赞数
            case 'select':
                $sql = "SELECT `num` FROM `praise`";
                $result = mysqli_query($conn, $sql);
                // 返回结果集中行的数量，判断有无数据读出来！
                if (mysqli_num_rows($result) > 0) {
                    // 输出数据：从结果集中取得一行作为关联数组
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '{"code":"200","num":"'.$row["num"].'"}';
                    }
                } else {
                    echo '{"code":"100","msg":"no data"}';
                }
                break;

            // 点赞数更新
            case 'update':
                $num = $_POST["num"];
                $sql = "UPDATE `praise` SET `num`='{$num}'";
                mysqli_query($conn, $sql);
                break;
            default:
                # code...
                break;
        }
        // 关闭数据库
        mysqli_close($conn);
    }
 ?>