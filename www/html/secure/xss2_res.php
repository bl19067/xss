<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			
		<title>登録</title>
	</head>
<body>
<?php
$user='root';
$pass='root';

$name = $_POST['name'];
$detail  = $_POST['detail'];

    try{
      $pdo = new PDO('mysql:dbname=testdb;host=192.168.0.30',$user,$pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }catch (PDOException $e) 
    {
      echo "DB接続に失敗しました。\n";
      echo $e->getMessage() . "\n";
      exit;
    }try{
      $sql ="INSERT INTO securelist VALUES ('$name','$detail')";
      $stmh = $pdo->prepare($sql);
      $stmh->execute();
      
      $name = $_POST['name'];
      $detail  = $_POST['detail'];


    }catch(PDOException $Exception){
      die('接続エラー：' .$Exception->getMessage());
    }
    try{
      $sql = "SELECT * FROM testdb.securelist";
      $stmh = $pdo->prepare($sql);
      $stmh->execute();

    }catch(PDOException $Exception){
      die('接続エラー：' .$Exception->getMessage());
    }
?>
<table><tbody>
    <tr><th>名前</th><th>詳細</th></tr>
    <?php
        while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
    ?>
      <tr>
        <th><?=($row['name'])?></th>
        <th><?=($row['detail'])?></th>
    </tr>
    <?php
        }
        $pdo = null;
    ?>
    </tbody></table>
      </body>
  </html>


<p>登録が完了しました。</p><br/>htmlspecialchar関数を使った受け取り<h3>htmlspecialchar($_POST[""])</h3>を使えばエスケープ処理ができる。<br><h3><a href="http://localhost:8080/index.php">戻る</a></h3>
</body>
</html>