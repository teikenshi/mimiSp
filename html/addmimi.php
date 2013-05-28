<?php
$name = $_POST["name"];
$org = $_POST["org"];
$addr = $_POST["addr"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
$course = $_POST["course"];
$nums = $_POST["nums"];
$calltime=$_POST["calltime"];
$adddate=date("Y-m-d");
$server = "localhost";
$dbname = "xmas";
$user = "user1";
$passwd = "s7bZhXBfRV8M542d";
$sv = mysql_connect($server, $user, $passwd) or die("Connection err1");
$db = mysql_select_db($dbname) or die("Connection error2");
$sql = "insert into xmastran values('$book_id','$name','$org','$addr','$tel','$mail','$course','$nums','$adddate','$calltime')";
if(mysql_query($sql, $sv)){
	$sql2 = "select book_id from xmastran order by book_id desc limit 1";
	if($rows = mysql_query($sql2, $sv)){
		$row = mysql_fetch_assoc($rows);
		echo "登録成功：予約番号 = ".$row['book_id'];
	}else{
		echo "登録不成功1：お名前 = ".$name;
	}
}else {
  echo "登録不成功2：お名前 = ".$name;
}
mysql_close($sv);
?>

