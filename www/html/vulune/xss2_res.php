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
      $pdo = new PDO('mysql:dbname=testdb;host=172.21.0.2',$user,$pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }catch (PDOException $e) 
    {
      echo "DB接続に失敗しました。\n";
      echo $e->getMessage() . "\n";
      exit;
    }try{
      $sql ="INSERT INTO tasklist VALUES ('$name','$detail')";
      $stmh = $pdo->prepare($sql);
      $stmh->execute();
      $name = $_REQUEST['name'];
      $detail  = $_REQUEST['detail'];


    }catch(PDOException $Exception){
      die('接続エラー：' .$Exception->getMessage());
    }
    try{
      $sql = "SELECT * FROM testdb.tasklist";
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


<p>登録が完了しました。<br /><p>
<div style="padding: 15px;"></div>
データベースに格納したスクリプトを実行するために「確認する」へ移動<br><h3><a href="http://localhost:8080/vulune/xss2_res.php">確認する</a></h3>
<div style="padding: 10px;"></div>
確認できたら解説へ移動</br><h3><a href="http://localhost:8080/secure/xss2_review.php">解説</a></h3>
</body>
</html>