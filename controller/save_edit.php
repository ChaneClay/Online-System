<?php  

	$id = $_POST['id'];
	$name = $_POST['name'];
	$edu = $_POST['edu'];
	$job = $_POST['job'];
	$unit = $_POST['unit'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$research = $_POST['research'];


	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');	// 数据库链接

	$sql = "UPDATE author
	SET name='$name', edu='$edu',job='$job',unit='$unit',phone='$phone',email='$email',research='$research'
	WHERE id=$id;";

	$result = $db->query($sql);

	if(!$result){				// 判读sql是否执行成功
		echo "<script>alert('更新数据失败！');location.href = '../index.php'</script>";
	}else{
		echo "<script>alert('成功更新数据！');location.href = '../index.php'</script>";

	}


?>