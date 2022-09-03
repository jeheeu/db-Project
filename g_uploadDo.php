<?php
$jb_conn = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");

$userid = $_POST['userid'];
$password = $_POST['pw'];
$g_userId = $_POST['g_userId'];
$category = $_POST['category'];
$content = $_POST[ 'guiltContents' ];
$date = date('Y-m-d');

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

    $jb_sql = "INSERT INTO guiltuser (reporterId, userId, category, guiltContents, guiltDate) VALUES
     ('$userid', '$g_userId', '$category', '$content', '$date');";
    mysqli_query( $jb_conn, $jb_sql );

    echo '게시글을 올렸습니다. '; 
    } else {
    echo '비밀번호가 틀렸습니다.';
    }
}
}

?>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>게시판 업로드</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: 8; }
    </style>
  </head>
  <body>
      <br>  <br>
  <center>
  <br>
  <input type = "button" value="닫기" onClick="opener.location.href='guilty.php';window.close()"
  style="width:50px;height:30px;font-size:14px;" >
  </font>  </form>
  </center>
  </body>
</html>