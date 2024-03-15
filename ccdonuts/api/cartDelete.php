<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | 商品削除</title>
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

  <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      unset($_SESSION['product'][$id]);
    }
  ?>

  <section>
    <h1>商品を削除しました</h1>
  </section>

</body>
</html>
<?php require '../footer.php'; ?>