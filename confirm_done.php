<?php
session_start();

if(isset($_SESSION["user_id"])==false){
	$_SESSION["user_id"]="guest";
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
		
		<div id="container">
			<div id="main">
				<h2>クロスサイトスクリプティング</h2>
				<section id="confirm_done">
					<p>お問い合わせが完了しました。</p>
					<a href="toppage.php">トップに戻る</a>
				</section>
			</div>
			
			<aside id="sidebar">
				<h2>関連リンク</h2>
				<p>ここに何らかの関連リンクが入ります。</p>
			</aside>
		</div>
		
		<footer>
			<small>2020 Sample footer</small>
		</footer>
		
	</body>
