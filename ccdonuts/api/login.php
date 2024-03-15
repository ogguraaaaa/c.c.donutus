<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | ログイン</title>
</head>
<body class="bodyLogin">

  <form action="loginSuccess.php" method="post">

  <section>
    <div class="breadcrumbs">
    </div>
    <div class="userWelcome">
    <?php
      if(isset($_SESSION['customer'])) {
        echo '<p>' . $_SESSION['customer']['name'] . '　様</p>';
      }
      ?>
    </div> 
  </section>

  <section>
    <h1>ログイン</h1>
    <div class="loginContainer">
      <div class="loginFrame">
        <p>メールアドレス</p>
        <input type="email" name="mail">
        <p>パスワード</p>
        <input type="password" name="password">
        <button type="submit" class="formBtn">ログインする</button>
      </div>
      <a href="signup.php"><p class="registerLink">会員登録はこちら</p></a>
      <a href="logout.php"><p class="registerLink">ログアウト</p></a>
    </div>
  </section>

</body>
</html>
<?php require '../footer.php'; ?>