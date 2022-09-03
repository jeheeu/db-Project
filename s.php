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
<title>OX몰 거래게시판</title>
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
</style>
</head>
<body>
<?php
  $connect = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");

?></head>

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

<br><br>
	<div class="lb-wrap">
	<div class="lb-text">
    <h2>거래게시판</h2>
	</div>
  <div class="lb-image"><img src="image/dw.jpg" alt="" ></div>
</div>
<br><br><br>
<div style="background-color: #fff;width: 70%;margin: 30px; position: relative; padding: 20px;
border-radius:  20px; border: 3px solid #12592B;margin: 10px; position: relative; 
padding: 20px;;transform: translate( 20%, 0% );" align="center">
<a href="index.php">HOME</a>&emsp;>&emsp;거래게시판 <br>
<font face="default" size="5"><b>거래게시판<br></b></font>
<br>
<table>
    <form action="s.php" method="post">
    <td>
        <button >신촌</button></form>
    </td>
        <form action="d.php" method="post">
    <td>
        <button>단월</button></form>
    </td>
        <form action="m.php" method="post">
    <td>
        <button>모시래마을</button></form>
    </td>
        <form action="mg.php" method="post">
    <td>
        <button>모시래기숙사</button></form>
    </td>
        <form action="hg.php" method="post">
    <td>
        <button>해오름기숙사</button></form>
    </td>
    
</table>
<table border="1" cellspacing="0" summary="게시판의 글제목 리스트"
style="border-bottom: 1px solid #444444;">
<tr>
<td width = "50" align="center">번호</td>
<td width = "500" align = "center">제목</td>
<td width = "100" align = "center">작성자</td>
<td width = "200" align = "center">날짜</td>
<td width = "50" align = "center">좋아요</td>
</tr>
</thead>

<tbody>
<?php
  $query ="SELECT * FROM posting WHERE address = '신촌';";
  $result = $connect->query($query);
  $total = mysqli_num_rows($result);
  
while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
        if($total%2==0){
?>                      <tr class = "even">
<?php   }
        else{
?>                      <tr>
      <?php } ?>
<td width = "50" align = "center"><?php echo $total?></td>
<td width = "500" align = "center">
<a href = "view.php?number=<?php echo $rows['postingIdx']?>">
<?php echo $rows['title']?></td>
<td width = "100" align = "center"><?php echo $rows['userId']?></td>
<td width = "200" align = "center"><?php echo $rows['date']?></td>
<td width = "50" align = "center"><?php echo $rows['interestNum']?></td>
</tr>
<?php
$total--;
}
?>
<tr class="line"></tr>
</tbody>
</table>

<div class = text>
<font style="cursor: hand"onClick="location.href='./write.php'">글쓰기</font>
</div>






</body>
</html>