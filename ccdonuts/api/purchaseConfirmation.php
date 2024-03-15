<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | 購入確認（最終確認）</title>
</head>
<body class="bodyPurchaseConfirmation">

  <form action="purchaseSuccess.php" method="post">

  <section>
    <div class="breadcrumbs">
    </div>
    <div class="userWelcome">
      <?php
        if(isset($_SESSION['customer'])) {
          echo '<p>' . $_SESSION['customer']['name'] . '　様</p>';
        }
        // echo '<pre>';
        // print_r($_SESSION['product']);
        // echo '</pre>';
      ?>
    </div> 
  </section>

  <section>
    <h1>ご購入確認</h1>
    <div class="purchaseContainer">
      <h3>ご購入商品</h3>
      <div class="purchaseItem">
        <div class="purchaseItemList">
          <p>商品名</p>
          <label for="" class="confirmationLabel"></label>
        </div>
        <div class="purchaseItemList">
          <p>数量</p>
          <label for="" class="confirmationLabel"></label>
        </div>
        <div class="purchaseItemList">
          <p>金額</p>
          <label for="" class="confirmationLabel"></label>
        </div>
      </div>
      <div class="purchaseItem">
        <div class="purchaseItemList">
          <p>商品名</p>
          <label for="" class="confirmationLabel"></label>
        </div>
        <div class="purchaseItemList">
          <p>数量</p>
          <label for="" class="confirmationLabel"></label>
        </div>
        <div class="purchaseItemList">
          <p>金額</p>
          <label for="" class="confirmationLabel"></label>
        </div>
      </div>
      <div class="purchaseItem">
        <div class="purchaseItemList">
          <p>合計数量</p>
          <label for="" class="confirmationLabel"></label>
        </div>
        <div class="purchaseItemList">
          <p>合計金額</p>
          <label for="" class="confirmationLabel"></label>
        </div>
      </div>
      <h3>お届け先</h3>
      <div class="purchaseItem">
        <div class="purchaseItemList">
          <p>お名前</p>
          <label for="" class="confirmationLabel"></label>
        </div>
        <div class="purchaseItemList">
          <p>郵便番号</p>
          <label for="" class="confirmationLabel"></label>
        </div>
        <div class="purchaseItemList">
          <p>住所</p>
          <label for="" class="confirmationLabel"></label>
        </div>
      </div>
      <h3>お支払い方法</h3>
      <div class="purchaseItem">
        <div class="purchaseItemList">
          <p>お支払い</p>
          <label for="" class="confirmationLabel"></label>
        </div>
        <div class="purchaseItemList">
          <p>ブランド</p>
          <label for="" class="confirmationLabel"></label>
        </div>
      </div>
    </div>
    <button type="submit" class="formBtn">購入を確定する</button>
  </section>

  </form>

</body>
</html>
<?php require '../footer.php'; ?>