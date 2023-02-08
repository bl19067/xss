<!doctype html>
<head>
	<title>conclude</title>

</head>
<body>
	<h2>XSSとは任意のスクリプトを実行できてしまう脆弱性</h2>
	<h3>対策として<h3><h2>メソッドを受ける時にhtmlspecialchars関数を使ってエスケープ処理をする<h2><br>
	
	

	<h3>XSSのパターン</h3>
	<h2>反射型</h2>
	<li>直接スクリプトが入力されて実行される</li>
	<li>HTTPメソッドに紛れ込ませて誘導しようとしている</li>
	<li>メールなどでURLにスクリプトを混ぜてくる</li>
	<img src="./secure/images/reflected-xss.png" alt="反射型">
	<h2>継続型</h2>
	<li>データベースなどにすでに格納しておくことで被害者側のWeb上で任意スクリプトが実行されやすい</li>
	<li>継続型の場合が攻撃が通りやすい</li>
	<img src="./secure/images/stored-xss.png" alt="継続型">
	<br>
	<div style="padding: 15px;"></div>
	MySQLのテーブル上に不正なスクリプトを埋め込んだ↓</br>
	<img src="./secure/images/db_log.png" alt="格納型"></br>
	<h4>初めから不正なスクリプトが仕掛けてあるため攻撃が通りやすい</h4><br>
	######################################################################<br>
	<div style="padding: 20px;"></div>
	最後にXSSを利用した不正スクリプト例を実行して終了する</br>
	<img src="./secure/images/cheat_sheet.png" alt="XSSのスクリプト">
	<div style="padding: 20px;"></div>
	<a href="http://localhost:8080/xss_input.php"><h2>実行環境へ移動</h2></a>

<br>
<h3>終わったら戻る</h3>
<a href="http://localhost:8080/index.php"><h2>戻る</h2></a>







