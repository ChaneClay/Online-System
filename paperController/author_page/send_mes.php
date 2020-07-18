<?php 

if (isset($_POST['notice']) && $_GET['id']) {
	$offer = trim($_POST['notice']);
	$id = $_GET['id'];



	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');

	$sql = "UPDATE author SET offer='$offer' WHERE id=$id;";

	$result = $db->query($sql);
	if(!$result){
		echo "<script>alert('通知书发送失败！');location.href = '../../paper.php'</script>";
	}else{
		echo "<script>alert('通知书发送成功！');location.href = '../../paper.php'</script>";

	}

	
}else{
	echo "无消息！";
}
	


?>