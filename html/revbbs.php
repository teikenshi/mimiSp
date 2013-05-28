<?php
$page = $_GET["page"];
$server = "localhost";
$dbname = "xmas";
$user = "user1";
$passwd = "s7bZhXBfRV8M542d";
$sv = mysql_connect($server, $user, $passwd) or die("Connection err1");
$db = mysql_select_db($dbname) or die("Connection error2");
//$sql = "select * from xmasbbs order by bbs_id desc limit $offset,5";
if($page == "ALL"){
	$sql = "select * from xmasbbs1 order by bbs_id desc";
}else{
	$sql = "select * from xmasbbs1 order by bbs_id desc limit ".$page;
}
$rows = mysql_query($sql);
if($rows > 0){
	$out = "";
	while ($row = mysql_fetch_assoc($rows)){
		$out .= $row['bbs_id']."<i>";
    $out .= $row['name']."<i>";
		$out .= $row['email']."<i>";
		$out .= $row['adddate']."<i>";
    $out .= $row['msg']."<i>";
		$out .= "<r>";
	}
	echo substr($out, 0, strlen($out)-3);
}else {
  echo "参照不成功：bbs_id = ".$bbs_id;
}
mysql_close($sv);
?>

