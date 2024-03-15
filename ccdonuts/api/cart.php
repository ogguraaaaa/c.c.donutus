<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | カート</title>
</head>
<body class="bodyCart">

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['recalculate'])) {
      foreach ($_SESSION['product'] as $productId => $product) {
          if (isset($_POST['quantity'][$productId])) {
              $quantity = $_POST['quantity'][$productId];
              $_SESSION['product'][$productId]['count'] = $quantity;
          }
      }
  }
  ?>

  <?php
  $cartItemCount = 0;
  if (isset($_SESSION['product'])) {
      foreach ($_SESSION['product'] as $item) {
          $cartItemCount += $item['count'];
      }
  }
  if (!empty($_SESSION['product'])) {
    $total=0;
    foreach ($_SESSION['product'] as $id=>$product) {
      $subtotal=$product['price']*$product['count'];  
      $total+=$subtotal;
    }
  } else {
    $total=0;
  }
  ?>

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
    <div class="cartContainer">
        <div class="cartCheck">
          <form action="purchaseConfirmation.php" method="post">
            <p class="itemCount">現在　商品<?php echo $cartItemCount; ?>点</p>
            <p class="orderTotal">ご注文小計：税込<span>￥<?php echo $total; ?></span></p>
            <input type="submit" class="purchaseBtn" value="購入確認へ進む">
          </form>
        </div> 

        <?php
        if (!empty($_SESSION['product'])) {
          foreach ($_SESSION['product'] as $id=>$product) {
            $subtotal2=$product['price']*$product['count'];
            echo <<<HTML
            <div class="cartItem">
              <a href=""><img src="../images/products{$product['id']}.png" alt=""></a>
              <div class="donutInfo">
                <form action="" method="post">
                <p class="detailName">{$product['name']}</p>
                <div class="line"></div>
                <div class="donutCount">
                  <p class="price">税込　￥{$subtotal2}</p>
                  <div class="quantityContainer">
                    <span class="quantityUnit">数量</span>
                    <input type="number" name="quantity[{$product['id']}]" class="quantityInput" value="{$product['count']}" min="1">
                    <input type="hidden" name="id" value="{$product['id']}">
                    <span class="quantityUnit">個</span>
                  </div>
                </div>
                  <input type="submit" name=recalculate class="recalculateBtn"  value="再計算">
                </form>
                <a href="cartDelete.php?id={$id}"><p class="deleteText">削除する</p></a>
                <div class="line"></div>
              </div>
            </div>
            HTML;
          }
        } else {
          echo '<h1>カートに商品がありません</h1>';
        }
        ?>

        <div class="cartCheck">
          <form action="purchaseConfirmation.php" method="post">
            <p class="itemCount">現在　商品<?php echo $cartItemCount; ?>点</p>
            <p class="orderTotal">ご注文小計：税込<span>￥<?php echo $total; ?></span></p>
            <input type="submit" class="purchaseBtn" value="購入確認へ進む">
          </form>
        </div>
        <a href="products.php" class="shoppingBtn">買い物を続ける</a>
    </div>
  </section>

</body>
</html>
<?php require '../footer.php'; ?>