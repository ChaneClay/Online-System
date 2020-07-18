<?php 
// 重置密码
class Edit_PWD
{
	private $username;
	private $db;
	private $email;
	private $pwd;
	private $con;
	private $code;
	private $sport;
	function __construct()
	{
		if (!isset($_POST['type'])) {
			echo "<script>alert('你访问的页面不存在!');history.go(-1);</script>";
			exit();
		}
		require '../config.php';
		$this->db = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME) or die('数据库连接异常');
	}


	public function uniqueEmail()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) ) {
		    if('xmlhttprequest' == strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])){
		        $this->email = $_POST['email'];
		        $sql = "SELECT count(*) FROM users WHERE email = '".$this->email."'";
		        $count = mysqli_fetch_row($this->db->query($sql))[0];
		        if ($count) {
		        	echo "1";
		        }else{
		        	echo "0";
		        }
		    }else{
		    	echo "hello world";
		    }
		}else{
			echo "hello world";
		}
	}


	public function checkPwd(){
		if (trim($this->pwd) == '' || strlen($this->pwd) < 6 || strlen($this->pwd) > 20) {
			echo "<script>alert('密码长度6-20位，请重新输入!');history.go(-1);</script>";
			exit();
		}
		if ($this->pwd != $this->con) {
			echo "<script>alert('密码不相同，请重新输入!');history.go(-1);</script>";
			exit();
		}
		$this->pwd = md5($this->pwd);
	}
	public function checkEmail()
	{
		$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
		if (!preg_match($pattern,$this->email)) {
			echo "<script>alert('邮箱格式不正确，请重新输入!');history.go(-1);</script>";
			exit();
		}
	}

	public function isUpdate(){
		$this->email = $_POST['email'];
		$this->sport = $_POST['sport'];
		$sql = "SELECT sport FROM users WHERE email= '".$this->email."'";
		
		$result = mysqli_fetch_row($this->db->query($sql))[0];

		if($result!=$this->sport){
			echo "<script>alert('输入的运动与原信息不匹配，请重新输入!');history.go(-1);</script>";
			exit();
		}
	}



	// 对用户提交重置密码的数据进行校验
	public function doEdit()
	{
		$this->email = $_POST['email'];

		$this->sport = $_POST['sport'];
		$this->pwd = $_POST['password'];
		$this->con = $_POST['confirm'];
		$this->checkPwd();		//检查密码
		$this->checkEmail();	//检查邮箱
		$this->isUpdate();		//邮箱和密保是否匹配
		

		// 更新数据库中的密码
		$sql = "UPDATE users SET PASSWORD = '".$this->pwd."' WHERE email = '".$this->email."';";

		$result = $this->db->query($sql);
		if ($result) {		//执行成功
			$this->db->close();
			echo "<script>alert('成功更新密码!');location.href = '../welcome.php';</script>";
			exit();
		}else{				//操作失败
			echo $this->db->error;
			exit();
		}
	}

}

$edit = new Edit_PWD();
switch ($_POST['type']) {
	case 'email':
		$edit->uniqueEmail();
		break;
	case 'all':
		$edit->doEdit();
		break;
	default:
		echo "hello world";
		break;
}

