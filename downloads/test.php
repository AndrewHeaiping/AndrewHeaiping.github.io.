<?php
	//$name=$_GET["name"];//接收参数
	$hostname_conn = "localhost";
	$database_conn = "weixin"";  
	$username_conn = "root";
	$password_conn = "12345678";
	//连接MYSQL数据库
	$conn = mysqli_connect($hostname_conn, $username_conn, $password_conn,       $database_conn)or trigger_error(mysqli_error(),E_USER_ERROR);
	if(!$conn){
		echo "连接不成功！";	
	}
	$sql = "SELECT * FROM articles";
 	mysqli_query($conn, "set names 'utf8'");
	$result = mysqli_query($conn, $sql);
	class Article{
		public $id;
		public $title;
		public $date;
		public $resource; 
		public $url;
	}
	$data = array();
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$article=new Article();
			$article->title=$row["title"];
			$article->id=$row["id"];
			$article->date=$row["date"];
			$article->resource=$row["resource"];
			}
			echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
			}
?>