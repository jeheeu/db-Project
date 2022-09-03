<!doctype html>
<!-- /* Color Theme Swatches in Hex */
.World-Anti-Doping-Agency-Rebranding-1-hex { color: #12592B; }
.World-Anti-Doping-Agency-Rebranding-2-hex { color: #0ABF04; }
.World-Anti-Doping-Agency-Rebranding-3-hex { color: #09A603; }
.World-Anti-Doping-Agency-Rebranding-4-hex { color: #F2F2F2; }
.World-Anti-Doping-Agency-Rebranding-5-hex { color: #0D0D0D; }
 본문 1200px
 -->
 <?php 
  include 'inc_head.php';

    if ( $jb_login != TRUE ) {
    ?>
    <script>
    alert("로그인이 필요합니다.");
    document.location.href = "login.php";
    </script>
    <?php
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <title>OX몰 프로필</title>
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
<font size="1">
<p align="right">
	    <a href="alarm.php" target="new" style="color: #4F4F4F;"> 알림
        <?php 
        $userid = $_SESSION[ 'userId' ];
        $connect = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");
        $query ="select * from user where userId = '$userid'";
        $result = mysqli_query($connect, $query);
        $post = mysqli_fetch_array($result);
        if($post['alarm'] != 0) { ?>
        <img src = "image/ic_new.gif"><?php } else{}?></a>&emsp;&emsp;
	<a href="logout.php" target="new" style="color: #4F4F4F;"> 로그아웃 </a> &emsp;&emsp;
	<a href="newuser.php" target="new" style="color: #4F4F4F;"> 회원가입 </a>
	 &emsp;&emsp;
</p>
</font>
<hr>
<center>
<table>
	<td>
	<div style="height: 100px;margin: 15px">
	<center>
            	<a href="index.php">
                <img src="image/logo.png" style="width: 350px;height: 88px;">
            </a>
	</center>
	</div>
	</td>
	<td>
	<div class="d1" >
	  <left>
     <form action="search.php" method="post">
     <input type="text" placeholder="검색어 입력" name="posting">
     <button type="submit"></button>
     </form>
	  </left>
	</div>
	</td>
</table>
</center>
<nav>
    <div class="container">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li> <a href="post.php">Posting</a></li>
            <li class='sub-menu'> <a href="#">Board<i class='fa fa-angle-down'></i></a>
                <ul>
                    <li><a href="notion.php">공지사항</a></li>
                    <li><a href="guilty.php">신고 게시판</a></li>
                </ul>
            </li>
            <li><a href="profile.php">Profile</a></li>
        </ul>
    </div>
</nav>

<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $('nav li').hover(
        function() {
            $('ul', this).stop().slideDown(200);
        },
        function() {
            $('ul', this).stop().slideUp(200);
        }
    );
</script>

<br>
<br>
<center>
	<div class="lb-wrap">
  <div class="lb-text">
    <h2>About Us</h2>
	</div>
  <div class="lb-image"><img src="image/mosirae.jpg" alt=""></div>
</div>

<br>
<table >
	<td>
		<div style="background-color: #0D0D0D;width: 350px;
    	height: 600px; border-radius:  20px; border: 3px solid #0D0D0D;
    	margin: 30px; position: relative; padding: 20px;transform: 
    	translate( 0%, -20% );">
    		<div class="box1" style="background: #DCDCDC;margin: 30px; position: relative;transform: 
    	translate( 30%, 0% );border: 5px solid #DCDCDC;">
    		<img class="profile1" src="image/none.jpg">
			</div>
			<center>
			<font size="5" color="#DCDCDC" style="font-weight: bold;"> HyeounJu </font>
			</center>
    	<hr color = "#4F4F4F"> 
    		<font color="#DCDCDC">
			<p href="#" style="color: #4F4F4F;"><li>학력: 건국대 글로컬 재학</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>학년: 3학년</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>전화번호: 010-2937-0954</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>인스타: @e_hj_12</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>카카오톡: @wjdguswn0954</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>이메일: wjdguswn1203@kku.ac.kr</li></p>
		</font>
			<hr color = "#4F4F4F">
		</div>
	</td>
	<td>
		<div style="background-color: #0D0D0D;width: 350px;
    	height: 600px; border-radius:  20px; border: 3px solid #0D0D0D;
    	margin: 30px; position: relative; padding: 20px;transform: 
    	translate( 0%, -20% );
    	">
    		<div class="box1" style="background: #DCDCDC;margin: 30px; position: relative;transform: 
    	translate( 30%, 0% );border: 5px solid #DCDCDC;">
    		<img class="profile1" src="image/none.jpg">
			</div>
			<center>
			<font size="5" color="#DCDCDC" style="font-weight: bold;"> JeHee </font>
			</center>
    	<hr color = "#4F4F4F"> 
    		<font color="#DCDCDC">
			<p href="#" style="color: #4F4F4F;"><li>학력: 건국대 글로컬 재학</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>학년: 3학년</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>전화번호: 010-8945-5087</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>인스타: @elin__d</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>카카오톡: @qpw532</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>이메일 : qpw5380@naver.com</li></p>
		</font>
			<hr color = "#4F4F4F">
		</div>
	</td>
	<td>
		<div style="background-color: #0D0D0D;width: 350px;
    	height: 600px; border-radius:  20px; border: 3px solid #0D0D0D;
    	margin: 30px; position: relative; padding: 20px;transform: 
    	translate( 0%, -20% );
    	">
    		<div class="box1" style="background: #DCDCDC;margin: 30px; position: relative;transform: 
    	translate( 30%, 0% );border: 5px solid #DCDCDC;">
    		<img class="profile1" src="image/none.jpg">
			</div>
			<center>
			<font size="5" color="#DCDCDC" style="font-weight: bold;"> JongMin </font>
			</center>
    	<hr color = "#4F4F4F"> 
    		<font color="#DCDCDC">
			<p href="#" style="color: #4F4F4F;"><li>학력: 건국대 글로컬 재학</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>학년: 3학년</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>전화번호: 010-4191-1859</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>인스타: @j.m.lee0104</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>카카오톡: @ljmlhy0104</li></p>
			<hr color = "#4F4F4F">
			<p href="#" style="color: #4F4F4F;"><li>이메일: asraka0104@gmail.com</li></p>
		</font>
			<hr color = "#4F4F4F">
		</div>
	</td>
</table>
</body>
</html>