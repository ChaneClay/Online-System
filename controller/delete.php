<?php 

if (isset($_GET["a"]) && $_GET["a"] == 'delete' && isset($_GET["id"])){		//判断是否执行删除动作
	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');

	$id = $_GET["id"];
	    
	$sql = "delete from author where id=$id";


	$result = mysqli_query($db,$sql);		// 执行sql语句
	if(!$result){
	    echo '<script type="text/javascript">alert("删除失败")</script>';
	}
	else{
		echo "<script>alert('成功更新数据！');location.href = '../index.php'</script>";
	}
	
}

?>
