<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | 購入完了</title>
</head>
<body class="bodyPurchaseSuccess">

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
    <h1>ご購入完了</h1>
    <div class="loginContainer">
      <div class="loginFrame">
        <p>ご購入いただきありがとうございます。</p>
        <p>今後ともご愛顧の程、宜しくお願いいたします。</p>
      </div>
      <a href="../index.php"><p class="registerLink">TOPページへすすむ</p></a>
    </div>
  </section>

</body>
</html>
<?php require '../footer.php'; ?>