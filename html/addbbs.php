<?php
$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["msg"];
$adddate = date("Y-m-d H:i:s");

$server = "localhost";
$dbname = "xmas";
$user = "user1";
$passwd = "s7bZhXBfRV8M542d";
$sv = mysql_connect($server, $user, $passwd) or die("Connection err1");
$db = mysql_select_db($dbname) or die("Connection error2");

$sql = "insert into xmasbbs1 values('$bbs_id','$name','$email','$msg','$adddate')";
if(mysql_query($sql, $sv)){
  echo 1;
	//echo "true";
}else {
  echo 0;
	//echo "false";
}
mysql_close($sv);
?>

