<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>OX몰 개인정보 수정</title>
<style>
td { color:#999999; font-size:12px; }
</style>
<?php
  include 'inc_head.php';
?>
</head>
<body>
<center>
<form name='update' action='update-ok.php' method='post'>

	<table width='400' border='0' cellpadding='0' cellspacing='0' style='border:1px solid #999999;'>
		<tr height='30'>
			<td width='70' align='right' style='border-bottom:1px solid #999999;'>
				핸드폰 : &nbsp; &nbsp;
			</td>
			<td  width='70' style='border-bottom:1px solid #999999;'>
				<input type='number' name='phone'>&nbsp;
			</td>
		</tr>
		<tr height='30'>
			<td width='70' align='right' style='border-bottom:1px solid #999999;'>
				주소 : &nbsp; &nbsp;
			</td>
			<td  width='70' style='border-bottom:1px solid #999999;'>
				<select name="localCategory">
                <option selected>신촌</option>
                <option>단월</option>
                <option>모시래마을</option>
                <option>모시래기숙사</option>
                <option>해오름기숙사</option>
			</td>
		</tr>
		<tr height='30'>
			<td width='70' align='right' style='border-bottom:1px solid #999999;'>
				상세주소 : &nbsp; &nbsp;
			</td>
			<td  width='100' height='70' style='border-bottom:1px solid #999999;'>
				<input type='text' name='detailadd'>&nbsp;
			</td>
		</tr>
	</table>
	<table width='500' border='0' cellpadding='0' cellspacing='0'>
		<tr height='50'>
			<td align='center'>
				<button type='submit'>수정하기</button>
			</td>
		</tr>
	</table>
</form>
</center>
</body>
</html>
