<?php 

$host="local host";
$user="root";
$password="";
$db="aaaa";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($post['username'])){
	$username=$_post['username'];
	$password=$_post['password'];

	$sql="select * from sign in form where username='".$username."'AND password='".$password."' limit 1";
	$result=mysql_query($sql);

	if (mysql_num_rows($result)==1) {
		echo"you have successgully login";
		exit();

		# code...
	}
	else {
		echo"you have entered wrong password ";
		exit();
		# code...
	}
}







 ?>
