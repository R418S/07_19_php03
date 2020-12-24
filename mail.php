<?php

// // データを変数に格納
$name = $_POST['name'];
$sex = $_POST['sex'];
$hobby = $_POST['hobby'];
// var_dump($_POST);
// exit();

// DB接続情報
$dbn = 'mysql:dbname=gsacf_d07_19;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}
// SQL作成&実行
$sql = 'INSERT INTO
hobby_table(id, name, sex, hobby)
VALUES(NULL, :name, :sex, :hobby)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':hobby', $hobby, PDO::PARAM_STR);
$status = $stmt->execute(); // SQLを実行

// 入力チェック（未入力の場合は弾く，commentのみ任意）
if (
  !isset($_POST['name']) || $_POST['name'] == '' ||
  !isset($_POST['sex']) || $_POST['sex'] == '' ||
  !isset($_POST['hobby']) || $_POST['hobby'] == ''
) {
  exit('ParamError');
}
