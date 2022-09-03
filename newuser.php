<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>oxmall 회원가입</title>
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
    <br><br><br>

        <div style="height: 100px;margin: 15px">
            <center>
               <a href="index.php">
                <img src="image/logo.png" style="width: 400px;height: 100px;">
            </a>
            </center>
        </div>
<center>
        <div style="background-color: #fff;width: 1200px;
       height: 1000px; border-radius: 20px; border: 3px solid #DCDCDC;
       margin: 30px 10px; position: relative; padding: 80px;">

<form  action="register.php" method="post"  target="payviewer" 
onsubmit="window.open('register.php', 'payviewer', 'width=500, height=200, left=400, top=50, scrollbars');">
<table width="900" height="700" align="center" cellpadding="10" style="transform: translate( -15%, 0% );">
   <tr>
      <td><font size="5"  style="font-weight: bold"> 아이디 </font></td>
      <td><input type="text" name="userId" size="30" style="height: 50px" required></td>
   </tr>
   <tr>
      <td><font size="5"  style="font-weight: bold"> 비밀번호 </font></td>
      <td><input type="password" name="userPw" size = "30 "style="height: 50px" required></td>
   </tr>
   <tr>
      <td><font size="5"  style="font-weight: bold"> 비밀번호 확인 </font></td>
      <td><input type="password" name="password_confirm" size="30"style="height: 50px"></td>
   </tr>
   <tr>
      <td><font size="5"  style="font-weight: bold"> 이름 </font></td>
      <td><input type="text" name="name" size = "30 "style="height: 50px" required></td>
   </tr>
   <tr>
      <td><font size="5"  style="font-weight: bold"> 학교 이메일 </font></td>
      <td><input type="text" name="email" size="15"style="height: 50px"> @kku.ac.kr
      </td>
   </tr>
   <tr>
      <td><font size="5"  style="font-weight: bold"> 전화번호 </font></td>
      <td><table>
      <td><input type="number" size="30" name="phone" style="height: 50px; width: 230px" required></td>
   </table></td>
   </tr>
   <tr>
      <td><font size="5"  style="font-weight: bold"> 주소 </font></td>
      <td><select name="localCategory" style="height: 50px; width: 230px;">
         <option selected>신촌</option>
         <option>단월</option>
         <option>모시래마을</option>
         <option>모시래기숙사</option>
         <option>해오름기숙사</option>
      </td>
   </tr>
   <tr>
      <td><font size="5"  style="font-weight: bold"> 상세주소 </font></td>
      <td><input type="text" name="detailAdd" size="30" style="height: 50px; width: 230px;" required></td>
   </tr>
</table>
<br>
<center>
   <table width="900" height="100" align="center" 
   style="transform: translate( -25%, 0% );">
        <td>
            <div class="d3" style = "padding: 20px;position: relative;">
                    
                        <button type="reset" >
                            <font size="5" style="font-weight: bold;color: #F2F2F2;">취소
                        </button>
                        </font>     
                </div>
            </td>
            <td>
            <div class="d2"style = "padding: 20px;position: relative;">
                  <button type="submit">
                     <font size="5" style="font-weight: bold;color: #F2F2F2;">회원가입
               </button>

            </font></div></td>
</table>
</center>

</form>

</body>

</html>