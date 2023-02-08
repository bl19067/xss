docker-compose.ymlをディレクトリトップにする

./start.shを起動したら自動で立ち上がる


http://localhost:8080/

コンテナが立ち上がらなかったりwebの動きが悪くなったりしたら./restart.shを実行し、もう一度dbコンテナを改造する
xss2の実行スクリプトでは<script>alert(`***`)</script>に統一する(``はctrl+@)



ポストテスト後半で必要なやられサーバへのアクセス
http://18.183.207.65/xss_aws/start.php


# xss
