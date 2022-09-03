<!DOCTYPE html>
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
<meta charset = 'utf-8'>
<title>OX몰 알림</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<link href="style.css" rel="stylesheet" type="text/css">
<!--한글 폰트-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR&display=swap" rel="stylesheet">
<!--<link href="boradstyle.css" rel="stylesheet" type="text/css">-->

<style>
table{

        border-collapse: collapse;
        border-bottom: 1px solid #444444;
        
}

td{
        border-bottom: 1px solid #efefef;
        padding: 10px;
}
table .even{
        background: #efefef;
}
.text{
        text-align:center;
        padding-top:20px;
        color:#000000
}
.text:hover{
        text-decoration: underline;
}
a:hover { text-decoration : underline;}
* {
  font-family: 'IBM Plex Sans KR', sans-serif;
}
.line{border-bottom: 1px solid #444}
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
        $q = "UPDATE user SET alarm = 0 WHERE userId = '$userid';";
        mysqli_query($connect, $q);
        if($post['alarm'] != 0) { ?>
        <img src = "image/ic_new.gif"><?php } else{}
        ?></a>&emsp;&emsp;
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
            <li><a href="aboutus.html">About Us</a></li>
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

<br><br>
   <div class="lb-wrap">
   <div class="lb-text">
    <h2>내 알림</h2>
   </div>
  <div class="lb-image"><img src="image/dw.jpg" alt="" ></div>
</div>
<br><br><br>
<div style="background-color: #fff;width: 70%;margin: 30px; position: relative; padding: 20px;
border-radius:  20px; border: 3px solid #12592B;margin: 10px; position: relative; 
padding: 20px;;transform: translate( 20%, 0% );" align="center">
<?php
    include 'inc_head.php';
    $userid = $_SESSION[ 'userId' ];

    $connect = mysqli_connect("localhost", "root","", "oxmall" ) or die ("connect fail");
    $query ="select * from user where userId = '$userid'";
    $result = mysqli_query($connect, $query);
    $post = mysqli_fetch_array($result);

    $connect = mysqli_connect("localhost", "root","", "oxmall" ) or die ("connect fail");
    $query ="select * from user where userId = '$userid'";
    $result = mysqli_query($connect, $query);
    $post = mysqli_fetch_array($result);
    //조인으로 묶자.
?>
    <br><br>
    <form  action='send.php' method='post' target="payviewer" 
    onsubmit = "window.open('review.php', 'payviewer', 'width=600, height=450,left=400, top=50, scrollbars');"
    enctype="multipart/form-data">
    <td align = "center" width=800><font size=5 style="font-weight: bold" >[&emsp;내 알림&emsp;]</font></td>
    <table style="padding-top:50px; position: relative; transform: translate( -23%, 0% );" 
    align= "center" width=800 border = 0 >
    <tr>
    <td height = "500">
    <?php
    $connect = mysqli_connect("localhost", "root","", "oxmall" ) or die ("connect fail");
    $query ="select * from alarm where userId = '$userid'";
    $result = mysqli_query($connect, $query);
    //$post = mysqli_fetch_array($result);
    ?>
            <?php while($post = mysqli_fetch_array($result)) { ?>
        <table align= "left"><!--while문으로 엮어서 alarmIdx만큼 출력 -->
        <tr><td>
            <img src="image/tri.png" width="10" height="10">
            <font size=3 style="font-weight: bold" >
            <?php echo $post['fromId']; ?>님이
             <?php if(!empty($post['title'])) { echo $post['title'];?> 게시물에 <?php } ?> 
             
             연락을 보냈습니다.</td></tr>
                <tr><td>내용: <?php echo $post['content']; ?></td></tr>
        </table>
         <?php   } ?>                
    </td>
    </tr>
    </table></font>

    보낼 사람: <input type="text" name="userId" method="post">
    <button type="submit">연락보내기</button>
</form>
<br>
    <br><br><br>
</div>

<br><br>
<br><br>

</body>
</html>