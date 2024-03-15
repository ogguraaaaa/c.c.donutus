<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | 商品一覧</title>
</head>
<body class="bodyProducts">

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
    <h1>商品一覧</h1>
    <div class="ranking">
      <h2>メインメニュー</h2>
      <div class="rankContainer">
        <div class="rankItem">
          <p class="rankNumber">1</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=1"><img src="../images/products1.png" alt="CCドーナツ　当店オリジナル（5個入り）"></a>
          <p class="productName">CCドーナツ 当店オリジナル（5個入り）</p class="productName">
          <p class="price">税込　￥1,500</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="1">
          <input type="hidden" name="name" value="CCドーナツ 当店オリジナル（5個入り）">
          <input type="hidden" name="price" value="1500">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">4</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=2"><img src="../images/products2.png" alt="チョコレートデライト（5個入り）"></a>
          <p class="productName">チョコレートデライト（5個入り）</p class="productName">
          <p class="price">税込　￥1,600</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="2">
          <input type="hidden" name="name" value="チョコレートデライト（5個入り）">
          <input type="hidden" name="price" value="1600">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">4</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=3"><img src="../images/products3.png" alt="キャラメルクリーム（5個入り）"></a>
          <p class="productName">キャラメルクリーム（5個入り）</p class="productName">
          <p class="price">税込　￥1,600</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="3">
          <input type="hidden" name="name" value="キャラメルクリーム（5個入り）">
          <input type="hidden" name="price" value="1600">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">1</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=4"><img src="../images/products4.png" alt="プレーンクラシック（5個入り）"></a>
          <p class="productName">プレーンクラシック（5個入り）</p class="productName">
          <p class="price">税込　￥1,500</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="4">
          <input type="hidden" name="name" value="プレーンクラシック（5個入り）">
          <input type="hidden" name="price" value="1500">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">4</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=5"><img src="../images/products5.png" alt="キャラメルクリーム（5個入り）"></a>
          <p class="productName">【新作】サマーシトラス（5個入り）</p class="productName">
          <p class="price">税込　￥1,600</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="5">
          <input type="hidden" name="name" value="キャラメルクリーム（5個入り）">
          <input type="hidden" name="price" value="1600">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">6</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=6"><img src="../images/products6.png" alt="ストロベリークラッシュ（5個入り）"></a>
          <p class="productName">ストロベリークラッシュ（5個入り）</p class="productName">
          <p class="price">税込　￥1,800</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="6">
          <input type="hidden" name="name" value="ストロベリークラッシュ（5個入り）">
          <input type="hidden" name="price" value="1800">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="ranking">
      <h2>バラエティセット</h2>
      <div class="rankContainer">
        <div class="rankItem">
          <p class="rankNumber">1</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=7"><img src="../images/products7.png" alt="フルーツドーナツセット（12個入り）"></a>
          <p class="productName">フルーツドーナツセット（12個入り）</p class="productName">
          <p class="price">税込　￥3,500</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="7">
          <input type="hidden" name="name" value="フルーツドーナツセット（12個入り）">
          <input type="hidden" name="price" value="3500">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">4</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=8"><img src="../images/products8.png" alt="フルーツドーナツセット（14個入り）"></a>
          <p class="productName">フルーツドーナツセット（14個入り）</p class="productName">
          <p class="price">税込　￥4,000</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="8">
          <input type="hidden" name="name" value="フルーツドーナツセット（14個入り）">
          <input type="hidden" name="price" value="4000">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">1</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=9"><img src="../images/products9.png" alt="ベストセレクションボックス（4個入り）"></a>
          <p class="productName">ベストセレクションボックス（4個入り）</p class="productName">
          <p class="price">税込　￥1,200</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="9">
          <input type="hidden" name="name" value="ベストセレクションボックス（4個入り）">
          <input type="hidden" name="price" value="1200">
          <input type="hidden" name="count" value="1">
        </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">4</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=10"><img src="../images/products10.png" alt="クラッシュボックス（7個入り）"></a>
          <p class="productName">チョコクラッシュボックス（7個入り）</p class="productName">
          <p class="price">税込　￥2,400</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="10">
          <input type="hidden" name="name" value="クラッシュボックス（7個入り）">
          <input type="hidden" name="price" value="2400">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">6</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=11"><img src="../images/products11.png" alt="クリームボックス（4個入り）"></a>
          <p class="productName">クリームボックス（4個入り）</p class="productName">
          <p class="price">税込　￥1,400</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="11">
          <input type="hidden" name="name" value="クリームボックス（4個入り）">
          <input type="hidden" name="price" value="1400">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">4</p>
          <form action="cartInsert.php" method="post">
          <a href="detail1.php?id=12"><img src="../images/products12.png" alt="クリームボックス（9個入り）"></a>
          <p class="productName">クリームボックス（9個入り）</p class="productName">
          <p class="price">税込　￥2,800</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="12">
          <input type="hidden" name="name" value="クリームボックス（9個入り）">
          <input type="hidden" name="price" value="2800">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
<?php require '../footer.php'; ?>