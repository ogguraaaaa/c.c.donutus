<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | ログアウト</title>
</head>
<body class="bodyLogoutSuccess">

  <section>
    <div class="breadcrumbs">
    </div>
  </section>

  <section>
    <?php
      if (isset($_SESSION['customer'])) {
          unset($_SESSION['customer']);
          echo '<h1>ログアウトしました。</h1>';
      } else {
        echo '<h1>すでにログアウトしています。</h1>';
      }
    ?>
    <a href="../index.php"><p class="registerLink">TOPページへすすむ</p></a>
  </section>

</body>
</html>
<?php require '../footer.php'; ?>