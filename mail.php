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
?>
<!-- <a href="hobby_read.php">一覧画面</a> -->
<?php

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

$sql = 'SELECT * FROM hobby_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  foreach ($result as $record) {
    $output .= "<tr>";
    $output .= "<td>{$record["name"]}</td>";
    $output .= "<td>{$record["sex"]}</td>";
    $output .= "<td>{$record["hobby"]}</td>";
    $output .= "</tr>";
  }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>名前と趣味リスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>名前と趣味リスト（一覧画面）</legend>

    <table>
      <thead>
        <tr>
          <th>名前</th>
          <th>性別</th>
          <th>趣味</th>
        </tr>
      </thead>
      <tbody>
        <!-- <tr><td>name</td><td>sex</td><tr>hobby</td>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>

  </fieldset>
  <a href="hobby_input.php">入力画面</a>
</body>

</html>