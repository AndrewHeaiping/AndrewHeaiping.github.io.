<?php
	//$name=$_GET["name"];//接收参数
	$hostname_conn = "localhost";
	$database_conn = "weixin"; //数据库名
	$username_conn = "root"; //用户名
	$password_conn = "12345678"; //自己数据库的密码
	//连接MYSQL数据库
	$conn = mysqli_connect($hostname_conn, $username_conn, $password_conn,$database_conn)or trigger_error(mysqli_error(),E_USER_ERROR);
　?>

$sql = "SELECT *FROM article";
 	mysqli_query($conn,
"set names 'utf8'"); //不写这句有可能乱码
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo json_encode($row,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
  }
}