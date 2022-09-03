<?php 
  include 'inc_head.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>oxmall 로그인</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet" type="text/css">
	<!--한글 폰트-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR&display=swap" rel="stylesheet">
	<style>
		* {
			font-family: 'IBM Plex Sans KR', sans-serif;
		}
	</style>

</head>
<body>
	<?php
      if ( $jb_login ) {
    ?>
	<script>
      alert("이미 로그인하셨습니다.");
	  document.location.href = "index.php";
	</script>
    <?php
      }
    ?>
<br><br><br>
<center>
	<div style="height: 100px;margin: 15px">
	<center>
            	<a href="index.php">
                <img src="image/logo.png" style="width: 400px;height: 100px;">
            </a>
	</center>
	</div>
	</td>
<table >
	<td>
		<div style="background-color: #fff;width: 550px;
    	height: 400px; border-radius:  20px; border: 3px solid #DCDCDC;
    	margin: 30px; position: relative; padding: 0px 20px;">
    	<font size="6" style="font-weight: bold; "><p align = "center" style ="height: 20px;"> LOGIN </p></font>
    	<hr color = "#DCDCDC"><br><br>
	<form action="login_ok.php" method="post"  target="payviewer" 
onsubmit="window.open('register.php', 'payviewer', 'width=500, height=200, left=400, top=50, scrollbars');">
	<div class="d2" >
	  <left>
	  <input type="text" name = "userId" placeholder="아이디">
	  </left>
	</div>
	<br>
	<div class="d2">
	  <left>
	  <input type="password" name ="userPw" placeholder="비밀번호">
	  </left>
	</div>
	<div >
	  <center>
	<font size="5" style="font-weight: bold;color: #F2F2F2;">
	<button type="submit" value="로그인" style="  
		position: relative; top: 30px;right: 0px;
  		width: 300px;height: 60px;border: none;background: #12592B;
		border-radius: 5px;cursor: pointer;
		font-weight: bold;color: #F2F2F2; font-size: 20px;">로그인</button>
	  </form>
	  </center>
	</div>
	</td>
</table>
<font size="2">
	<a href="newuser.php" style="color: #4F4F4F;"> 회원가입 </a>
	 &emsp;&emsp;
</font>
<font size="2">
	<a style="color: #4F4F4F;"
	 onclick="window.open('sendmail.php', 'payviewer', 'width=500, height=200, left=400, top=50, scrollbars');">
	이메일 인증 </a>
	 &emsp;&emsp;
</font>
</center>


<br>
<br>
</body>
</html>