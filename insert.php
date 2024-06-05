<?php
ini_set( 'display_errors', 1 );

//1. POSTデータ取得
$name   = $_POST["name"];
$url  = $_POST["url"];
$genre = $_POST["genre"];
$memo    = $_POST["memo"];


//2. DB接続します
//*** function化する！  *****************
// try {
//     $db_name = "book_db";    //データベース名
//     $db_id   = "root";      //アカウント名
//     $db_pw   = "";          //パスワード：XAMPPはパスワード無し or MAMPはパスワード”root”に修正してください。
//     $db_host = "localhost"; //DBホスト
//     $pdo = new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
// } catch (PDOException $e) {
//     exit('DB Connection Error:'.$e->getMessage());
// }

try {
    // ここにさくらのデータベース接続情報を入力
    // $pdo = new PDO('mysql:dbname=lifeee_book_db;charset=utf8;host=mysql57.lifeee.sakura.ne.jp', 'lifeee', 'kana1234');
    $pdo = new PDO('mysql:dbname=lifeee_book_db;charset=utf8;host=mysql57.lifeee.sakura.ne.jp', 'lifeee', 'kana1234');
  } catch (PDOException $e) {
    exit('DBConnection Error:'.$e->getMessage());
  }

include("funcs.php");
// $pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO book_table(name,url,genre,memo,date)VALUES(:name,:url,:genre,:memo,sysdate())");
$stmt->bindValue(':name',   $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url',  $url,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':genre',    $genre,    PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':memo', $memo, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect("index.php");
}

