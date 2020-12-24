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
        <p><label><input type="radio" name="sex" value="man">男</label></p>
        <p><label><input type="radio" name="sex" value="woman">女</label></p>
      </fieldset>
      <fieldset>
        <legend>趣味</legend>
        <p><label><input type="checkbox" name="hobby" value="sports">スポーツ</label></p>
        <p><label><input type="checkbox" name="hobby" value="reading">読書</label></p>
        <p><label><input type="checkbox" name="hobby" value="musics">音楽</label></p>
        <p><label><input type="checkbox" name="hobby" value="travel">旅行</label></p>
        <p><label><input type="checkbox" name="hobby" value="movie">映画</label></p>
        <p><label><input type="checkbox" name="hobby" value="job">仕事</label></p>
      </fieldset>
      <p><input type="submit" value="送信"><input type="reset" value="リセット"></p>
      <a href="hobby_read.php">一覧画面</a>
    </fieldset>
  </form>
  <!-- <form action="todo_create.php" method="POST">
    //fieldsetでformのグループ化グループの間をtabキーで簡単に移動することが可能になる
    <fieldset>
      //フォームの入力項目グループにキャプション（タイトルや説明）を付ける際に使用する
      <legend>DB連携型todoリスト（入力画面）</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
        todo: <input type="text" name="todo">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form> -->

</body>

</html>