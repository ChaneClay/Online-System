<?php 

// 实现显示推荐人数的功能
if(isset($_GET['id'])){

	$id = $_GET['id'];			// 获取传递过来需要推荐的id
	$num = $_GET['num']+1;

	$btn = '';					// 记录点击推荐的按钮

	if(isset($_GET['btn1'])){	// 判断是哪一个按钮被选中
		$btn = 'btn1';
	}elseif(isset($_GET['btn2'])){
		$btn = 'btn2';
	}elseif(isset($_GET['btn3'])){
		$btn = 'btn3';
	}

	if($num >= 2){		// 如果推荐人数大于2， 则录用
		$hire = '录用';
		if($num>3){		// 若人数大于3，则为3
			$num=3;
		}
	}else{
		$hire = '未录用';
	}

	//数据库连接
	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');

	$sql = "UPDATE paper
		SET num='$num', hire='$hire', $btn=1
		WHERE id='$id';";


	$result = $db->query($sql);			// 执行数据语句
	if(!$result){
		echo "<script>alert('更新数据失败！');location.href = '../paper.php'</script>";
	}else{
		echo "<script>location.href = '../paper.php'</script>";

	}
}

?>

