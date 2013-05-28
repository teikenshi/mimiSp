<?php
$book_id = $_POST["book_id"];
$server = "localhost";
$dbname = "xmas";
$user = "user1";
$passwd = "s7bZhXBfRV8M542d";
$sv = mysql_connect($server, $user, $passwd) or die("Connection err1");
$db = mysql_select_db($dbname) or die("Connection error2");
$sql = "delete from xmastran where book_id='$book_id'";
if(mysql_query($sql, $sv)){
  echo "削除成功：予約ID = ".$book_id;
}else {
  echo "削除不成功：予約ID = ".$book_id;
}
mysql_close($sv);
?>


