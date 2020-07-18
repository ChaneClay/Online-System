<?php  
	
	session_start();

	if(isset($_SESSION['no'])){
		$_SESSION['no'] += 1;
	}else{
		$_SESSION['no'] = 1;
	}
	
	$class = $_POST['class'];

	//稿件编号，由专业分类号、投稿日期和序号组成
	$id = $class .'-' . date("Ymd") .'-'. $_SESSION['no'];	

	

	$name = $_POST['name'];
	$author_id = $_POST['author_id'];
	$authors = $_POST['authors'];
	$author = $_POST['author'];
	
	$key_word = $_POST['key_word'];
	$Chinese_abstract = $_POST['Chinese_abstract'];
	$English_abstract = $_POST['English_abstract'];
	$Funded_projects = $_POST['Funded_projects'];


	//数据库连接
	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');	

	//插入语句
	$sql = "INSERT INTO paper (id, name, author_id, authors, author, class, key_word, Chinese_abstract, English_abstract, Funded_projects)
	VALUES ('$id', '$name', '$author_id', '$authors', '$author', '$class', '$key_word', '$Chinese_abstract', 
	'$English_abstract', '$Funded_projects')";

	$result = $db->query($sql);

	if(!$result){
		echo "<script>alert('添加数据失败！');location.href = '../paper.php'</script>";

	}else{
		echo "<script>alert('成功添加数据！');location.href = '../paper.php'</script>";


	}


?>