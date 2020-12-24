<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>趣味のアンケート</title>
</head>

<body>
  <form action="mail.php" method="POST">
    <h1>趣味についてのアンケート</h1>
    <!-- fieldsetでformのグループ化グループの間をtabキーで簡単に移動することが可能になる -->
    <fieldset>
      <p><label>お名前：<input type="text" name="name" size="40"></label></p>
      <fieldset>
        <!-- フォームの入力項目グループにキャプション（タイトルや説明）を付ける際に使用する -->
        <legend>性別</legend>
        <p><label><input type="radio" name="sex" value="男">男</label></p>
        <p><label><input type="radio" name="sex" value="女">女</label></p>
      </fieldset>
      <fieldset>
        <legend>趣味</legend>
        <p><label><input type="radio" name="hobby" value="スポーツ">スポーツ</label></p>
        <p><label><input type="radio" name="hobby" value="読書">読書</label></p>
        <p><label><input type="radio" name="hobby" value="音楽">音楽</label></p>
        <p><label><input type="radio" name="hobby" value="旅行">旅行</label></p>
        <p><label><input type="radio" name="hobby" value="映画">映画</label></p>
        <p><label><input type="radio" name="hobby" value="仕事">仕事</label></p>
      </fieldset>
      <p><input type="submit" value="送信"><input type="reset" value="リセット"></p>
      <!-- <a href="mail.php">一覧画面</a> -->
    </fieldset>
  </form>
</body>

</html>