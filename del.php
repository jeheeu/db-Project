<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>로그인 확인</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: 8; }
    </style>
  </head>
  <body>
<?php
include 'inc_head.php';
$userid = $_SESSION[ 'userId' ];
$jb_conn = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");

$idx = $_POST['idx'];
$id = $_POST['id']; //작성자


if($userid === $id) {
	$sql = "DELETE FROM posting WHERE postingIdx = '$idx';";
	mysqli_query( $jb_conn, $sql );

	echo '게시글이 삭제되었습니다.';
}
else {
	echo '작성자가 아닙니다.';
}
?>

	<br><br>
  <center>
  <br>
  <input type = "button" value="닫기" onClick="opener.location.href='post.php';window.close()"
  style="width:50px;height:30px;font-size:14px;" >
  </font>  </form>
  </center>
  </body>
</html>