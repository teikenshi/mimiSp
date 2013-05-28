<?php
$book_id = $_POST["book_id"];
$name = $_POST["name"];
$org = $_POST["org"];
$addr = $_POST["addr"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
$course = $_POST["course"];
$nums = $_POST["nums"];
$calltime=$_POST["calltime"];
$server = "localhost";
$dbname = "xmas";
$user = "user1";
$passwd = "s7bZhXBfRV8M542d";
$sv = mysql_connect($server, $user, $passwd) or die("Connection err1");
$db = mysql_select_db($dbname) or die("Connection error2");
$sql = "update xmastran set name='$name',org='$org',addr='$addr',tel='$tel',mail='$mail',course='$course',nums='$nums',calltime='$calltime' where book_id='$book_id'";
if(mysql_query($sql, $sv)){
  echo "更新成功：予約ID = ".$book_id;
}else {
  echo "更新不成功：予約ID = ".$book_id;
}
mysql_close($sv);
?>


