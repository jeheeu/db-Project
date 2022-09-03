<?php
include 'inc_head.php';

$title = $_POST['title']; //게시물 인덱스 
$userid = $_POST['userId']; //게시물 작성자 

$fromid = $_SESSION['userId'];

$connect = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");
$query ="select * from user where userId = '$userid'";
$result = mysqli_query($connect, $query);
$post = mysqli_fetch_array($result);
?>
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
<title>OX몰 글쓰기</title>
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
<form action = 'send-ok.php' method='post'>
    <table style="position: relative;" 
    align= "center" border = 1 >
    <tr>
    <td cols=2> 이 메세지는 작성자의 이메일로 전달되며 보내는 사람의 아이디도 보내게됩니다. </td>
    </tr>
    <tr>
    <td><textarea name="content" cols=65 rows=10></textarea></td>
    </tr>
    </table>
    <center>
    <br>
    <input type="hidden" name="title" value="<?php echo $title;?>">
    <input type="hidden" name="userid" value="<?php echo $post['userId'];?>">
    <input type="hidden" name="fromid" value="<?php echo $_SESSION['userId'];?>">

    <button type="submit">
        <font size="3"> 작성
    </button>
</form>

    </center>
    </td>
    </tr>
    </table>
    </form>
    <br><br><br>
</div>
</body>
</html>