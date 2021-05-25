<?php
session_start();

$error_msg = "";

if(isset($_POST["login"])){
	if(isset($_POST["id"])==true && $_POST["pwd"]=="abcd1234"){
		$_SESSION["user_id"]=$_POST["id"];
		$url = "toppage.php";
		header("Location: {$url}");
	} 
	$error_msg = "IDまたはパスワードが正しく入力されていません。";
}
?>

<!DOCTYPE>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="login.css">
		<title>XSS練習用</title>
	</head>
	
	<body>
		
		<!--ヘッダー-->
		<header>
			<h1>サンプル用サイト</h1>
		</header>
		<!--ヘッダー-->
		
		<!--ログインフォーム-->
		<div id="login_form">
			<p class="login_title">Login form</p>
			<form action="login.php" method="POST" name="login_form">
				<div class="item">
					<label class="item_label">ID</label>
					<input class="item_input" type="text" name="id">
				</div>
				<div class="item">
					<label class="item_label">Password</label>
					<input class="item_input" type="password" name="pwd">
				</div>
				<div class="error">
					<p><?php echo $error_msg; ?></p>
				</div>
				<div class="login_submit_wrap">
					<input type="submit" name="login" value="LOGIN">
				</div>
			</form>	
		</div>
		<!--ログインフォーム-->
		
	</body>
</html>
