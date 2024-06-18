<?php
// / エラーを出力する
ini_set('display_errors', 1);

// セッション開始
session_start();

//1. POSTデータ取得
$id     = $_POST["id"];
$event  = $_POST["event"];
$date   = $_POST["date"];
$name   = $_POST["name"];
$sales  = $_POST["sales"];

//2. DB接続と関数群の読み込み
include("funcs.php");
sschk();
$pdo = db_conn();

//３．データ更新SQL作成
$sql = "UPDATE report_table SET event=:event, date=:date, name=:name, sales=:sales WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':event', $event, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':sales', $sales, PDO::PARAM_INT);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); // 実行

//４．データ更新処理後
if($status == false){
  sql_error($stmt);
}else{
  redirect("select.php"); // 更新後のリダイレクト先
}
?>
