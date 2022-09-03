<?php
  include 'inc_head.php';
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>개인정보 수정</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
    </style>
  </head>
  <body>
<?php
$phone = $_POST['phone'];
$category = $_POST['localCategory'];
$detailadd = $_POST['detailadd'];
$userId = $_SESSION[ 'userId' ];

$connect = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");

if(!empty($phone)){
$sql = "UPDATE user SET phone = '$phone' WHERE userId = '$userId';";
mysqli_query( $connect, $sql );
}

if(!empty($category)){
$sql = "UPDATE user SET location = '$category' WHERE userId = '$userId';";
mysqli_query( $connect, $sql );
}
if(!empty($detailadd)){
$sql = "UPDATE user SET detailAdd = '$detailadd' WHERE userId = '$userId';";
mysqli_query( $connect, $sql );
}
echo '수정을 완료했습니다.';

?>
<br><br>
<form>
  <input type = "button" value="닫기" onclick="opener.location.href='profile.php';window.close()"
  style="width:50px;height:30px;font-size:14px;" >
</form>
  </body>
</html>
