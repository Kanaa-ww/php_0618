<?php
// / エラーを出力する
ini_set('display_errors', 1);

// セッション開始
session_start();

//1. GETデータ取得
$id = $_GET["id"];

//2. DB接続と関数群の読み込み
include("funcs.php");
sschk();
$pdo = db_conn();

//３．データ削除SQL作成
$sql = "DELETE FROM report_table WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  // Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); // 実行

//４．データ削除処理後
if($status == false){
  sql_error($stmt);
}else{
  redirect("select.php"); // 削除後のリダイレクト先
}
?>

