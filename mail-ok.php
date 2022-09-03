
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>인증번호 확인</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
    </style>
  </head>
  <body>
<?php

$jb_conn = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");
$jb_sql = "SELECT num FROM random;";
$jb_result = mysqli_query( $jb_conn, $jb_sql );
$jb_sql_d = "truncate random;";
$email = $_POST['email'];

while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
$numnum = $jb_row[ 'num' ];
}
$num_e = $_POST['num'];
?>

<?php
if($num_e == $numnum) {

    mysqli_query( $jb_conn, $jb_sql_d );
    $jb_sql_e = "UPDATE user SET email_ok = 'Y' WHERE email = '$email';";
    mysqli_query( $jb_conn, $jb_sql_e );

    echo '인증을 완료했습니다.';
}
else {
    echo '인증번호가 맞지 않습니다.';
}
?>
<br><br>
<form>
  <input type = "button" value="닫기" onClick="opener.location.href='login.php';window.close()"
  style="width:50px;height:30px;font-size:14px;" >
</form>
  </body>
</html>
