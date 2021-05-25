<?php
session_start();

if(isset($_SESSION["user_id"])==false){
	$_SESSION["user_id"]="guest";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$detail=$_POST["detail"];
}

?>
<!DOCTYPE>
<html lang="ja">
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" href="toppage.css">
		<title>XSS練習用</title>
	</head>
	<body>
		
		<!--ヘッダー-->
		<header>
			<h1>サンプルサイト</h1>
			<p>ようこそ<?php echo $_SESSION["user_id"] ?>さん</p>
			<nav id="global_navi">
				<ul>
					<li class="current"><a href="toppage.php">XSS</a></li>
					<li><a href="#">リンク2</a></li>
					<li><a href="#">リンク3</a></li>
					<li><a href="#">リンク4</a></li>
					<li><a href="#">リンク5</a></li>
				</ul>
			</nav>
		</header>
		<!--ヘッダー-->
		
		<div id="container">
			<!--メイン-->
			<div id="main">
				<h2>クロスサイトスクリプティング</h2>
				<p id="confirm_title">以下の内容でよろしいですか?</p>
				<form method="POST" action="confirm_done.php">
					<input type="hidden" name="name" value="<?php echo $name ?>">
					<input type="hidden" name="email" value="<?php echo $email ?>">
					<input type="hidden" name="detail" value="<?php echo $detail ?>">
					<div id="confirm">
						<div class="confirm_item">
							<label>お名前</label>
							<p><?php echo $name ?></p>
						</div>
						<div class="confirm_item">
							<label>メールアドレス</label>
							<p><?php echo $email ?></p>
						</div>
						<div class="confirm_item">
							<label>問い合わせ内容</label>
							<p><?php echo $detail ?></p>
						</div>
						<div class="confirm_submit_wrap">
							<input class="confirm_button" type="button" value="内容を修正する" onclick="history.back(-1)">
							<button class="confirm_button" type="submit" name="submit">送信する</button>
						</div>
					</div>
				</form>
			</div>
			<!--メイン-->
			
			<!--サイドバー-->
			<aside id="sidebar">
				<h2>関連リンク</h2>
				<p>ここに何らかの関連リンクが入ります。</p>
			</aside>
			<!--サイドバー-->
			
		</div>
		
		<!--フッター-->
		<footer>
			<small>2020 Sample footer</small>
		</footer>
		<!--フッター-->
		
	</body>
</html>
