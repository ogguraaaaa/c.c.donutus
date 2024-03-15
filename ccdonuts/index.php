<?php session_start(); ?>
<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="common/reset.css">
  <link rel="stylesheet" href="styles/style.css">
  <title>C.C.Donuts</title>
</head>
<body>

  <section>
    <div class="userWelcome">
      <?php
      if(isset($_SESSION['customer'])) {
        echo '<p>' . $_SESSION['customer']['name'] . '　様</p>';
      }
      ?>
    </div>
  </section>

  <section>
    <div class="heroImg">
      <img src="images/top1.png" alt="４種類のドーナツを分け合う">
    </div>
    <div class="information">
      <div class="infoTop">
        <a href="api/detail1.php?id=5"><img src="images/top2.png" alt="サマーシトラス"></a>
        <img src="images/top3.png" alt="ドーナツのある生活">
      </div>
      <div class="infoBottom">
        <a href="api/products.php"><img src="images/top4.png" alt="商品一覧"></a>
      </div>
    </div>
    <div class="belief">
      <p class="beliefItem1">Philosophy</p>
      <p class="beliefItem2">私たちの信念</p>
      <p class="beliefItem3">"Creating Connections"</p>
      <p class="beliefItem4">「ドーナツでつながる」</p>
    </div>
  </section>

  <section>
    <div class="ranking">
      <h1>人気ランキング</h1>
      <div class="rankContainer">
        <div class="rankItem">
          <p class="rankNumber">1</p>
          <form action="api/cartInsert.php" method="post">
          <a href="api/detail1.php?id=1"><img src="images/top6.png" alt="CCドーナツ　当店オリジナル（5個入り）"></a>
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
          <p class="rankNumber">2</p>
          <form action="api/cartInsert.php" method="post">
          <a href="api/detail1.php?id=7"><img src="images/top7.png" alt="フルーツドーナツセット（12個入り）"></a>
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
          <p class="rankNumber">3</p>
          <form action="api/cartInsert.php" method="post">
          <a href="api/detail1.php?id=8"><img src="images/top8.png" alt="フルーツドーナツセット（14個入り）"></a>
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
          <p class="rankNumber">4</p>
          <form action="api/cartInsert.php" method="post">
          <a href="api/detail1.php?id=2"><img src="images/top9.png" alt="チョコレートデライト（5個入り）"></a>
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
          <p class="rankNumber">5</p>
          <form action="api/cartInsert.php" method="post">
          <a href="api/detail1.php?id=9"><img src="images/top10.png" alt="ベストセレクションボックス（4個入り）"></a>
          <p class="productName">ベストセレクションボックス（4個入り）</p class="productName">
          <p class="price">税込　￥1,200</p>
          <input type="submit" class="cartBtn" value="カートに入れる">
          <input type="hidden" name="id" value="10">
          <input type="hidden" name="name" value="ベストセレクションボックス（4個入り）">
          <input type="hidden" name="price" value="1200">
          <input type="hidden" name="count" value="1">
          </form>
        </div>
        <div class="rankItem">
          <p class="rankNumber">6</p>
          <form action="api/cartInsert.php" method="post">
          <a href="api/detail1.php?id=6"><img src="images/top11.png" alt="ストロベリークラッシュ（5個入り）"></a>
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

</body>
</html>
<?php require 'footer.php'; ?>