<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>OX몰 메일 인증</title>
<style>
td { color:#999999; font-size:12px; }
</style>
<script>
function check() {
	form = document.sendmail;
	if ( form.email.value == '' ) {
		alert('학교 아이디를 입력해주세요.');
		form.email.focus();
		return false;
	}
	form.submit();
}
</script>
</head>
<body>
<form name='sendmail' action='mail.php' method='post'>

	<table width='500' border='0' cellpadding='0' cellspacing='0' style='border:1px solid #999999;'>
		<tr height='30'>
			<td align='center' colspan='2' style='border-bottom:1px solid #999999;'>
				학교 이메일 인증하기
			</td>
		</tr>
		<tr height='30'>
			<td width='70' align='right' style='border-bottom:1px solid #999999;'>
				받는 사람 : &nbsp; &nbsp;
			</td>
			<td  width='70' style='border-bottom:1px solid #999999;'>
				<input type='text' name='email'>&nbsp;@kku.ac.kr
			</td>

		</tr>
	</table>
	<table width='500' border='0' cellpadding='0' cellspacing='0'>
		<tr height='50'>
			<td align='center'>
				<input type='button' value='메일인증하기' onclick = "check();">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
