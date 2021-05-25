<?php
session_start();

if(isset($_SESSION["user_id"])==false){
	$_SESSION["user_id"]="guest";
}
?>

<!DOCTYPE>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
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
					<li><a href="file_upload.php">ファイルアップロード</a></li>
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
				<p id="contact_title">脆弱性に関するお問い合わせはこちら</p>
				<section>
					<form action="toppage_confirm.php" method="POST" id="contact_form">
						<dl>
							<dt>お名前</dt>
							<dd><input class="contact_item" type="text" name="name" required></dd>
							<dt>メールアドレス</dt>
							<dd><input class="contact_item" type="email" name="email" required></dd>
							<dt>問い合わせ内容</dt>
							<dd><textarea name="detail" wrap="hard"  id="contact_detail"></textarea></dd>
						</dl>
						<div id="contact_submit_wrap">
							<input type="submit" id="contact_submit_button" value="確認する">
						</div>
					</form>
				</section>
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
