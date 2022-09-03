<?php
include "PHPMailer.php";
include "SMTP.php";

$num = rand(0,9999);
    $jb_conn = mysqli_connect('localhost', 'root', '', 'oxmall') or die ("connect fail");
    $jb_sql = "INSERT INTO random (num) VALUES ('$num');";
    mysqli_query( $jb_conn, $jb_sql );
$email = $_POST['email']; //학교 아이디 저장

$mail = new PHPMailer();

$mail->isSMTP();


$mail->SMTPDebug = SMTP::DEBUG_OFF;


$mail->Host = 'smtp.naver.com';

$mail->Port = 465;


$mail->SMTPSecure = "ssl";

$mail->SMTPAuth = true;

$mail->Username = 'wjdguswn1203';//아이디

$mail->Password = 'JPTJLQBM1MUL';//비번

$mail->CharSet = 'UTF-8';

$mail->setFrom('wjdguswn1203@naver.com', 'ox mall');

$mail->addReplyTo('wjdguswn1203@naver.com', 'ox mall');//보내지는 아이디

$mail->addAddress($email.'@kku.ac.kr', '유제희');//받는 주소

$mail->Subject = 'OX몰 인증번호입니다.';

$mail->msgHTML("인증번호:".$num);

$mail->AltBody = '인증번호입니다.';

$mail->send();
define($numnum, $num);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>OX몰 메일 인증확인</title>
<style>
td { color:#999999; font-size:12px; }
</style>
</head>
<body>
<form action='mail-ok.php' method='post'>
	<table width='500' border='0' cellpadding='0' cellspacing='0' style='border:1px solid #999999;'>
		<tr height='30'>
			<td align='center' colspan='2' style='border-bottom:1px solid #999999;'>
				학교 이메일 인증하기
			</td>
		</tr>
		<tr height='30'>
			<td width='70' align='right' style='border-bottom:1px solid #999999;'>
				인증번호 : &nbsp; &nbsp;
			</td>
			<td  width='70' style='border-bottom:1px solid #999999;'>
				<input type='text' name='num'>
				<input type="hidden" name="email" value="<?php echo $email;?>">
			</td>

		</tr>
	</table>
	<table width='500' border='0' cellpadding='0' cellspacing='0'>
		<tr height='50'>
			<td align='center'>
				<button type='submit'>인증하기</button>
			</td>
		</tr>
	</table>
</form>
</body>
</html>
