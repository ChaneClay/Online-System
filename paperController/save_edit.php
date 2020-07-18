<?php  

	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$author_id = $_POST['author_id'];
	$authors = $_POST['authors'];
	$author = $_POST['author'];
	$class = $_POST['class'];
	$key_word = $_POST['key_word'];
	$Chinese_abstract = $_POST['Chinese_abstract'];
	$English_abstract = $_POST['English_abstract'];
	$Funded_projects = $_POST['Funded_projects'];


	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');

		$sql = "UPDATE paper
		SET name='$name', author_id='$author_id',authors='$authors',author='$author',class='$class',key_word='$key_word',Chinese_abstract='$Chinese_abstract', 
		English_abstract = '$English_abstract', Funded_projects='$Funded_projects'
		WHERE id='$id';";

		$result = $db->query($sql);
		if(!$result){
			echo "<script>alert('更新数据失败！');location.href = '../paper.php'</script>";
		}else{
			echo "<script>alert('成功更新数据！');location.href = '../paper.php'</script>";

		}


?>