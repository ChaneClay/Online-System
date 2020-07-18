<?php 
/**
* login
*/
class Login
{
	public $email;
	public $password;
	public $code;
	function __construct()
	{
		if (!isset($_POST['login'])) {
			echo "<script>alert('你访问的页面不存在!');history.go(-1);</script>";
			exit();
		}
		require '../config.php';

		$this->email = $_POST['email'];
		$this->password = $_POST['password'];
		$this->code = $_POST['code'];
	}

	public  function  checkMail(){
		//验证邮箱格式
		$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
		if (!preg_match($pattern,$this->email)) {
			echo "<script>alert('邮箱格式不正确，请重新输入!');history.go(-1);</script>";
			exit();
		}
	}

	public function checkPwd()
	{
		//验证密码格式
		if (!trim($this->password) == '') {
			$strlen = strlen($this->password);
			if ($strlen < 6 || $strlen > 20) {
				echo "<script>alert('密码长度6-20位，请重新输入!');history.go(-1);</script>";
				exit();
			}else{
				$this->password = md5($this->password);
			}
		}else{
			echo "<script>alert('密码不能为空!');history.go(-1);</script>";
			exit();
		}
	}

	public function checkCode()
	{
		//验证码处理
		if ($this->code != $_SESSION['code']) {
			echo "<script>alert('验证码错误，请重新输入!');history.go(-1);</script>";
			exit();
		}
	}

	//对用户登陆所提交数据进行检查
	public function checkUser()
	{
		//数据库验证
		$db = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME) or die('数据库连接异常');
		$sql = "SELECT username FROM users WHERE email = '".$this->email."' and password = '".$this->password."'";
		$result = mysqli_fetch_row($db->query($sql))[0];		// 数据库查询语句
		if (!$result) {
			echo "<script>alert('邮箱或密码不正确，请重新输入!');history.go(-1);</script>";
			exit();
		}else{								// 用户输入的邮箱和密码与数据库的相匹配，则允许登陆
			$db->close();
			$_SESSION['user'] = $result;	// 使用session记录用户的信息		
	
			echo "<script>location.href = '../index.php'</script>";		// 跳转到首页
			exit();
		}
	}

	// 调用函数数据各项数据进行检查
	public function doLogin()
	{
		$this->checkCode();
		$this->checkMail();
		$this->checkPwd();
		$this->checkUser();
	}

}

$login = new Login();
$login->doLogin();

