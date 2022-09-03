<?php
include 'inc_head.php';

$fromid = $_POST['fromid']; //보내는 이
$title = $_POST['title'];
$content = $_POST['content'];
$userid = $_POST['userid'];


$jb_conn = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");
$jb_sql = "INSERT INTO alarm ( userId, title, fromId, content) VALUES ('$userid', '$title', '$fromid', '$content');";
mysqli_query( $jb_conn, $jb_sql );

$connect = mysqli_connect("localhost", "root","", "oxmall" ) or die ("connect fail");
$query ="UPDATE user SET alarm = 1 WHERE userId = '$userid';";
mysqli_query($connect, $query);

echo '전송되었습니다.';

?>
