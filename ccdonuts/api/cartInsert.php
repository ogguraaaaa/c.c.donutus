<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | 商品追加</title>
</head>
<body class="bodyCartInsert">

  <?php
  $id=$_REQUEST['id'];
  if (!isset($_SESSION['product'])) {
    $_SESSION['product']=[];
  }
  $count=0;
  if (isset($_SESSION['product'][$id])) {
    $count=$_SESSION['product'][$id]['count'];
  }
  $_SESSION['product'][$id]=[
    'id'=>$_REQUEST['id'],
    'name'=>$_REQUEST['name'],
    'price'=>$_REQUEST['price'],
    'count'=>$count+$_REQUEST['count']  
  ];
  ?>

  <section>
    <div class="breadcrumbs">
    </div>
    <div class="userWelcome">
    </div> 
  </section>

  <section>
    <h1>カートに商品を追加しました</h1>
    <a href="products.php" class="shoppingBtn">買い物を続ける</a>
  </section>

</body>
</html>
<?php require '../footer.php'; ?>