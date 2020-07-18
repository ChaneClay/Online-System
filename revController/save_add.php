<?php  

	
	$name = $_POST['name'];
	$edu = $_POST['edu'];
	$job = $_POST['job'];
	$unit = $_POST['unit'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$research = $_POST['research'];
	$socialfunc = $_POST['socialfunc'];
	$creditcard = $_POST['creditcard'];



	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');


	$sql = "INSERT INTO reviewer (name, edu, job, unit, phone, email, research, socialfunc, creditcard)
	VALUES ('$name', '$edu', '$job', '$unit', '$phone', '$email', '$research', '$socialfunc', '$creditcard')";
	$result = $db->query($sql);

	if(!$result){
		echo "<script>alert('添加数据失败！');location.href = '../reviewer.php'</script>";
	}else{
		echo "<script>alert('成功添加数据！');location.href = '../reviewer.php'</script>";

	}


?>