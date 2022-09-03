<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>회원 가입</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: 8; }
    </style>
  </head>
  <body>
<?php
  $userid = $_POST['userId'];
  $password = $_POST['userPw'];
  $password_confirm = $_POST[ 'password_confirm' ];
  $username = $_POST[ 'name' ];
  $email = $_POST['email'];
  $detailadd = $_POST[ 'detailAdd' ];
  $phone = $_POST[ 'phone' ];
  $location = $_POST[ 'userlocation' ];

  if ( !is_null( $userid ) ) {
    $jb_conn = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");
    $jb_sql = "SELECT userId FROM user WHERE userId = '$userid';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $userid_e = $jb_row[ 'userId' ]; 
    }
    $jb_sql = "SELECT email FROM user WHERE email = '$email';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $email_e = $jb_row[ 'email' ];      
    }
    if ( $userid == $userid_e ) {
      $wu = 1;
    } else if ( $password != $password_confirm ) {
      $wp = 1;
    }  else if ( $email == $email_e ) {
      $we = 1;
    } else {
      $jb_sql_add_user = "INSERT INTO user ( userId, userPw, name, phone, detailAdd, email, location) 
      VALUES ( '$userid', '$password', '$username', '$phone','$detailadd', '$email', '$location');";
      mysqli_query( $jb_conn, $jb_sql_add_user );
      header( 'Location: sendmail.php' );
    }
  }
?>

      <br>  <br>
  <center>
  <font size="4"  style="font-weight: bold">
  <?php
   if ( $wu == 1 ) {
      echo "<p>아이디가 중복되었습니다.</p>";
   }
   if ( $wp == 1 ) {
      echo "<p>비밀번호가 일치하지 않습니다.</p>";
   }
   if ( $we == 1 ) {
   echo "<p>이미 존재하는 이메일입니다.</p>";
   }
  ?>
  <br>
  <input type = "button" value="닫기" onClick="window.close()"
  style="width:50px;height:30px;font-size:14px;" >
  </font>  </form>
  </center>
  </body>
</html>
