<?php

//1. POSTデータ取得
$event     =  $_POST["event"];
$date      =  $_POST["date"];
$name      =  $_POST["name"];
$sales     =  $_POST["sales"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
// $stmt = $pdo->prepare("INSERT INTO book_detail_table(event, date, name, sales) VALUES(:event, :date, :name, :sales())");
$stmt = $pdo->prepare("INSERT INTO report_table(event, date, name, sales) VALUES(:event, :date, :name, :sales)");

$stmt->bindValue(':event', $event, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':sales', $sales, PDO::PARAM_INT);

$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    $error = $stmt->errorInfo();
    echo "SQLエラー: " . $error[2];
    exit;
} else {
    redirect("select.php");
}


