<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | 商品詳細</title>
</head>
<body class="bodyDetail">

  <section>
    <div class="breadcrumbs">
    </div>
    <div class="userWelcome">
      <?php
        if(isset($_SESSION['customer'])) {
          echo '<p>' . $_SESSION['customer']['name'] . '様</p>';
        }
      ?>
    </div>  
  </section>

  <?php
  $pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
  $sql=$pdo->prepare('select * from products where id=?');
  $sql->execute([$_REQUEST['id']]);
  foreach ($sql as $row) {
  echo <<<HTML
  <form action="cartInsert.php" method="post">

  <section>
    <div class="detailContainer">
      <div class="detailImg">
        <a href=""><img src="../images/products{$row['id']}.png" alt="{$row['name']}"></a>
      </div>
      <div class="detailItem">
        <p class="detailName">{$row['name']}</p>
        <div class="line"></div>
        <p class="detailText">
          {$row['introduction']}
        </p>
        <div class="line"></div>
        <p class="price">税込　￥{$row['price']}</p>
        <div class="quantityContainer">
          <input type="number" name="count" class="quantityInput" value="1" min="1">
          <span class="quantityUnit">個</span>
          <input type="hidden" name="id" value="{$row['id']}">
          <input type="hidden" name="name" value="{$row['name']}">
          <input type="hidden" name="price" value="{$row['price']}">
          <input type="submit" class="cartBtn" value="カートに入れる">
          <div class="favorite">
            <img src="../images/favIcon.png" alt="お気に入りマーク">
          </div>
        </div>
      </div>
    </div>
  </section>
  </form>
  HTML;
  }
  ?>

</body>
</html>
<?php require '../footer.php'; ?>