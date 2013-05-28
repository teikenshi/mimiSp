<?php
$book_id = $_GET["book_id"];
$server = "localhost";
$dbname = "xmas";
$user = "root";
$passwd = "xampp";
$sv = mysql_connect($server, $user, $passwd) or die("Connection err1");
$db = mysql_select_db($dbname) or die("Connection error2");
$sql1 = "select * from xmastran where book_id='$book_id'";
if($row = mysql_query($sql, $sv)){
  echo "登録成功：代表者 = ".$name;
}else {
  echo "登録不成功：代表者 = ".$name;
}
mysql_close($sv);
?>

