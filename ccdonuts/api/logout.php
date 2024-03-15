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
<body class="bodyLogout">

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
    <h1>ログアウトしますか？</h1>
    <a href="logoutSuccess.php"><p class="registerLink">ログアウト</p></a>
  </section>

</body>
</html>
<?php require '../footer.php'; ?>