<?php
ini_set('display_errors', 1); // エラーメッセージを表示する

include("funcs.php");
$pdo = db_conn();

// 2. データ登録SQL作成
$sql = "SELECT * FROM book_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// 3. データ表示
$values = "";
if ($status == false) {
  sql_error($stmt);
} else {
  // 全データ取得
  $values = $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
  $json = json_encode($values, JSON_UNESCAPED_UNICODE);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
  <div class="container jumbotron">
    <table>
      <?php foreach($values as $v){ ?>
        <tr>
          <td><a href="delete.php?id=<?=h($v["id"])?>"><?=h($v["id"])?>【削除】</a></td>
          <td><a href="detail.php?id=<?=h($v["id"])?>"><?=h($v["id"])?></a></td>
          <td><?=h($v["name"])?></td>
        </tr>
      <?php } ?>
    </table>
  </div>
</div>
<!-- Main[End] -->

<!-- <script>
  const a = '<?php echo $json; ?>';
  console.log(JSON.parse(a));
</script> -->
</body>
</html>






<!-- <?php
//【重要】
//insert.phpを修正（関数化）してからselect.phpを開く！！
include("funcs.php");
$pdo = db_conn();

try {
  // ここにさくらのデータベース接続情報を入力
  $pdo = new PDO('mysql:dbname=lifeee_book_db;charset=utf8;host=mysql57.lifeee.sakura.ne.jp', 'lifeee', 'kana1234');
} catch (PDOException $e) {
  exit('DBConnection Error:'.$e->getMessage());
}


//２．データ登録SQL作成
$sql = "SELECT * FROM book_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron">

      <table>
      <?php foreach($values as $v){ ?>
        <tr>
          <!-- <td><?=h($v["id"])?></td> -->
          <td><a href="delete.php?id=<?=$v["id"]?>"><?=h($v["id"])?>【削除】</a></td>
          <td><a href="detail.php?id=<?=$v["id"]?>"><?=h($v["id"])?></a></td>
          <td><?=h($v["name"])?></td>
        </tr>
      <?php } ?>
      </table>

  </div>
</div>
<!-- Main[End] -->

<!-- <script>
  const a = '<?php echo $json; ?>';
  console.log(JSON.parse(a));
</script> -->
</body>
</html> -->
