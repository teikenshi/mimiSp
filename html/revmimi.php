<?php
$book_id = $_GET["book_id"];
$server = "localhost";
$dbname = "xmas";
$user = "user1";
$passwd = "s7bZhXBfRV8M542d";
$sv = mysql_connect($server, $user, $passwd) or die("Connection err1");
$db = mysql_select_db($dbname) or die("Connection error2");
//$sql = "select * from xmastran where book_id = '$book_id'";
//$res = executeQuery($sql);
//$rows = mysql_num_rows($res);
$rows = mysql_query("select * from xmastran where book_id = '$book_id'");
if($rows > 0){
	$out = "";
	while ($row = mysql_fetch_assoc($rows)){
    $out .= $row['name']."<i>";
		$out .= $row['org']."<i>";
    $out .= $row['addr']."<i>";
		$out .= $row['tel']."<i>";
    $out .= $row['mail']."<i>";
    $out .= $row['course']."<i>";
		$out .= $row['nums']."<i>";
		 $out .= $row['calltime']."<i>";
		$out .= "参照成功：book_id = ".$book_id;
	}
	echo $out;
}else {
  echo "参照不成功：book_id = ".$book_id;
}
mysql_close($sv);
?>

