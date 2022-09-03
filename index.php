<?php
  session_start();
  if( isset( $_SESSION[ 'userId' ] ) ) {
    $jb_login = TRUE;
  }
?>
<!doctype html>
<!-- /* Color Theme Swatches in Hex */
.World-Anti-Doping-Agency-Rebranding-1-hex { color: #12592B; }
.World-Anti-Doping-Agency-Rebranding-2-hex { color: #0ABF04; }
.World-Anti-Doping-Agency-Rebranding-3-hex { color: #09A603; }
.World-Anti-Doping-Agency-Rebranding-4-hex { color: #F2F2F2; }
.World-Anti-Doping-Agency-Rebranding-5-hex { color: #0D0D0D; }
 본문 1200px
 -->
<html>
<head>
    <meta charset="utf-8">
    <title>OX몰 홈페이지</title>
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
      if ( $jb_login != TRUE ) {
    ?>
	<script>
      alert("로그인이 필요합니다.");
	  document.location.href = "login.php";
	</script>
    <?php
      }
    ?>
<font size="1">
<p align="right">
	    <a href="alarm.php" style="color: #4F4F4F;"> 알림
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
<div class="slider">
    <input type="radio" name="slide" id="slide1" checked>
    <input type="radio" name="slide" id="slide2">
    <input type="radio" name="slide" id="slide3">
    <input type="radio" name="slide" id="slide4">
    <ul id="imgholder" class="imgs">
        <li><img src="image/side1.jpg" style = "width: 1200px;height: 400px;"></li>
        <li><img src="image/side2.jpg" style = "width: 1200px;height: 400px;"></li>
        <li><img src="image/side3.jpg" style = "width: 1200px;height: 400px;"></li>
        <li><img src="image/side4.jpg" style = "width: 1200px;height: 400px;"></li>
    </ul>
    <div class="bullets">
        <label for="slide1">&nbsp;</label>
        <label for="slide2">&nbsp;</label>
        <label for="slide3">&nbsp;</label>
        <label for="slide4">&nbsp;</label>
    </div>
</div>
<br>
<table>
	<td>
		<div style="background-color: #fff;width: 550px;
    	height: 400px; border-radius:  20px; border: 3px solid #12592B;
    	margin: 30px; position: relative; padding: 20px;">
    	<font size="5" style="font-weight: bold; "> 공지사항 </font>
    	<a href="notion.php"><img src="image/plus.png" width="20" height="20" align="right"></a>
    	<hr color = "green"> 

		<table border="0" cellspacing="10" summary="게시판의 글제목 리스트"
		style="border-bottom: 1px solid #444444;">
	
		<tbody>
		
    <?php
		$connect = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");
		$query ="select * from notion order by notionIdx desc";
		$result = $connect->query($query);
		$total = mysqli_num_rows($result);
		$lim = 9;
		while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
		if($lim != 0){?>
		<tr>
			<td width = "50" align = "center" ><img src="image/tri.png" width="10" height="10"></td>
			<td width = "500" align = "left"><?php echo $rows['title'] ?></td>
		</tr>
	<?php
	$lim--;}
	$total--;
	}
	?>
		</tbody>
		</table>

	</td>
	<td>

		<div style="background-color: #fff;width: 550px;
    	height: 400px; border-radius:  20px; border: 3px solid #12592B;
    	margin: 30px; position: relative; padding: 20px;">
    	<font size="5" style="font-weight: bold; "> 신고게시판 </font>
    	<a href="guilty.php"><img src="image/plus.png" width="20" height="20" align="right"></a>
    	<hr color = "green"> 

		<table border="0" cellspacing="10" summary="게시판의 글제목 리스트"
		style="border-bottom: 1px solid #444444;">
	
		<tbody>
    <?php
		$connect = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");
		$query ="select * from guiltuser order by guiltIdx desc";
		$result = $connect->query($query);
		$total = mysqli_num_rows($result);
		$lim = 9;
		while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
		if($lim != 0){?>
		<tr>
			<td width = "50" align = "center" ><img src="image/tri.png" width="10" height="10"></td>
			<td width = "500" align = "left"><?php echo $rows['guiltContents'] ?></td>
		</tr>
	<?php
	$lim--;}
	$total--;
	}
	?>
</tbody>
</table>

</body>
</html>