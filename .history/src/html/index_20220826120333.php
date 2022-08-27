<?php

require("../app/config/db_connect.php");

//対象のテーブルを変数に格納
$data = 部品保管;
// 対象テーブルを選択しSELECT文を変数tableへ格納
$table = "SELECT * FROM $data";
// queryを実行し、結果を変数に格納
$sql = $db->query($table);
// foreach文で繰り返し配列の中身を一行ずつ出力
foreach ($sql as $row) {
// データベースのフィールド名で出力
echo $data . "のデータ：" . $row['型番'] . 'は' . $row['在庫数'].'個です'.'<br>';
}

?>