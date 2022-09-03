<?php 
  include 'inc_head.php';
?>
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
$jb_conn = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");

$userid = $_POST['userId'];
$password = $_POST['userPw'];

if ( !is_null( $userid ) ) {
$jb_sql = "SELECT userPw FROM user WHERE userId = '" . $userid . "';";
$jb_result = mysqli_query( $jb_conn, $jb_sql );
while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
    $encrypted_password = $jb_row[ 'userPw' ];
}
if ( is_null( $encrypted_password ) ) {
    echo '아이디가 존재하지 않습니다.';
} else {
    if ( $password === $encrypted_password ) {
        $jb_sql = "SELECT email_ok FROM user WHERE userId = '" . $userid . "';";
        $jb_result = mysqli_query( $jb_conn, $jb_sql );
        while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        $email_ok = $jb_row[ 'email_ok' ];
        }
        if($email_ok == 'Y'){
            echo '로그인 되었습니다. ';
            $_SESSION[ 'userId' ] = $userid;
        }
        else {
            echo '이메일 인증을 해주세요.';
        }

    } else {
    echo '비밀번호가 틀렸습니다.';
    }
}
}

?>

      <br><br>
  <center>
  <br>
  <input type = "button" value="닫기" onClick="opener.location.href='index.php';window.close()"
  style="width:50px;height:30px;font-size:14px;" >
  </font>  </form>
  </center>
  </body>
</html>