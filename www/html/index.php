<!doctype html>
<div style="padding: 3px;"></div>
<h1>ローカル環境の学習システム</h1>

学習目標
<br>
<h3><li>XSSのパターンを理解する</li></h3>
<h3><li>脆弱性の原因を見つけて、対策するべき箇所をセキュアコーディングする</li></h3>
</br>
docker-compose.ymlをディレクトリトップにする
<div style="padding: 3px;"></div>
./start.shを起動したら自動で立ち上がる
<br>
http://localhost:8080/
<div style="padding: 3px;"></div>
コンテナが立ち上がらなかったりwebの動きが悪くなったりしたら./restart.shを実行し、もう一度dbコンテナを改造する(その場合、もう一度データベーステーブルを作成する)
<br>
<div style="padding: 8px;"></div>
実行する前に./README.mdを軽く見ておく<br>
<div style="padding: 10px;"></div>
<h2><a href="http://localhost:8080/vulune/xss1_req.php">Reflected-XSS</a></br></h2>
<div style="padding: 10px;"></div>

<h2><a href="http://localhost:8080/vulune/xss2_req.php">Stored-XSS</a><br></h2>
<div style="padding: 10px;"></div>
<h2><a href="http://localhost:8080/conclude.php">学習まとめ</br></a></h2>
<div style="padding: 10px;"></div>
学習が終わったら以下のURLへ移動してポストテストの準備
<br>
<div style="padding: 10px;"></div>
<h3><a href="https://forms.gle/oRWFv6oQiw51PCy26">ポストテスト回答フォーム</a></h3>
<br>
<div style="padding: 5px;"></div>
<h3><a href="http://18.181.193.86/xss_aws/start.php">クラウドサーバへ移動</a><h3>






