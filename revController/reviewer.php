<?php

session_start();

$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');
$sql = "SELECT * FROM reviewer";
$result = mysqli_fetch_all($db->query($sql));


$_SESSION['reviewer'] = $result;        // 往session里面存放内容

?>