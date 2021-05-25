<?php
session_start();
define("FILE_DIR", "img/");

$msg="";
$image_path="";

if(isset($_SESSION["user_id"])==false){
	$_SESSION["user_id"]="guest";
}

$filename=$_FILES["virus_file"]["name"];
$tmpname=$_FILES['virus_file']['tmp_name'];

if(!is_uploaded_file($tmpname)){
	$msg="ファイルがアップロードされていません。";
}else if(!move_uploaded_file($tmpname, FILE_DIR . $filename)){
	$msg="ファイルのアップロードに失敗しました。";
}else{
	$msg="ファイルのアップロードに成功しました。";
	$image_path=FILE_DIR . $filename;
}

?>

<!DOCTYPE>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="toppage.css">
		<title>脆弱性学習用</title>
	</head>
	<body>
		
		<!--ヘッダー-->
		<header>
			<h1>サンプルサイト</h1>
			<p>ようこそ<?php echo $_SESSION["user_id"] ?>さん</p>
			<nav id="global_navi">
				<ul>
					<li><a href="toppage.php">XSS</a></li>
					<li class="current"><a href="file_upload.php">ファイルアップロード</a></li>
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
				<h2>ファイルアップロードの脆弱性</h2>
				<section id="upload_done_section">
					<p><?php echo $msg; ?></p>
					<?php if(!empty($image_path)){ ?>
						<p><a href="<?php echo htmlspecialchars($image_path) ?>"><img src="<?php echo htmlspecialchars($image_path); ?>" alt="アップロードされた画像"></a></p>
					<?php } ?>
					<a href="file_upload.php">元のページに戻る</a>
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
