<?php
session_start();
include('../login/funcs.php');
loginCheck();
require_once('../db_Data/db.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（入力画面）</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<a href="../login/logout.php" class="">ログアウト</a>
  <form action="todo_create.php" method="post">
    <fieldset>
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
  </form>
</body>

</html>