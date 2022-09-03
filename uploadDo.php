<?php
include 'inc_head.php';

$jb_conn = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");

$userid = $_SESSION[ 'userId' ];

$title = $_POST[ 'title' ];
$content = $_POST[ 'content' ];
$date = date('Y-m-d');
$category = $_POST['category'];
$price = $_POST['price'];
$priceDeal = $_POST['priceDeal'];

if($priceDeal == false) {
    $priceDeal = 'N';
}
else {
    $priceDeal = 'Y';
}


    $jb_sql = "SELECT location FROM user WHERE userId = '" . $userid . "';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
    $location = $jb_row[ 'location' ];
    }
    $jb_sql = "INSERT INTO posting (title, contents, price, date, userId, priceDeal, address ,category) VALUES
     ('$title', '$content', '$price', '$date', '$userid', '$priceDeal', '$location', '$category');";
    mysqli_query( $jb_conn, $jb_sql );

    $jb_sql = "SELECT LAST_INSERT_ID() AS postingIdx;";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    $jb_row = mysqli_fetch_array( $jb_result );
    $postingIdx = $jb_row[ 'postingIdx' ];

    $uploadBase = './upload/';

    foreach ($_FILES['upload']['name'] as $f => $name) {   

        $name = $_FILES['upload']['name'][$f];
        $uploadName = explode('.', $name);

        $uploadname = time().$f.'.'.$uploadName[1];
        $uploadFile = $uploadBase.$uploadname;
        

        if(move_uploaded_file($_FILES['upload']['tmp_name'][$f], $uploadFile)){
            $jb_sql = "INSERT INTO postimage(file, postingIdx, imageNum) VALUES ('$uploadname', '$postingIdx', '$f');";
            mysqli_query( $jb_conn, $jb_sql );
        }
    }

    echo '게시글을 올렸습니다. '; 

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
  <input type = "button" value="닫기" onClick="opener.location.href='post.php';window.close()"
  style="width:50px;height:30px;font-size:14px;" >
  </font>  </form>
  </center>
  </body>
</html>