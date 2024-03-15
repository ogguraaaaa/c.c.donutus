<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="/ccdonuts/common/reset.css">
  <link rel="stylesheet" href="/ccdonuts/styles/style.css">
  <script src="../common/jquery-3.7.1.min.js"></script>
  <title></title>
</head>
<body>

  <div class="header">
    <div class="headerTop">
      <div class="headerLeft">
        <div id="wrapper">
          <button class="hamburger" id="openNav">
            <img src="/ccdonuts/images/hamburger.png" alt="Open menu">
          </button>
          <nav id="nav">
            <div class="dorowaTop">
              <div class= dorowaLogo>
                <img src="/ccdonuts/images/logo.png" alt="ロゴ">
              </div>
              <button class="close" id="closeNav">
                <img src="/ccdonuts/images/close.png" alt="Close menu">
              </button>
            </div>
            <ul class="dorowaList">
              <a href="/ccdonuts/index.php"><li>TOP</li>
              <a href="/ccdonuts/api/products.php"><li>商品一覧</li>
              <a href=""><li>よくある質問</li>
              <a href=""><li>問い合わせ</li>
              <a href=""><li>当サイトのポリシー</li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="headerCenter">
        <a href="/ccdonuts/index.php"><img src="/ccdonuts/images/Logo.png" alt="ロゴ"></a>
      </div> 
      <div class="headerRight">
        <a href="/ccdonuts/api/login.php"><img src="/ccdonuts/images/loginImg.png" alt="ログイン"></a>
        <a href="/ccdonuts/api/cart.php"><img src="/ccdonuts/images/cart.png" alt="カート" id="cartPng"></a>
      </div>
    </div>
    <div class="headerBottom">
    </div>
  </div>
  <?php
    echo "
    <script>
      const hamburgerButton = document.getElementById('openNav');
      const closeButton = document.getElementById('closeNav');
      const navMenu = document.getElementById('nav');

      hamburgerButton.addEventListener('click', function() {
        if (navMenu.style.display === 'block') {
          navMenu.style.display = 'none';
        } else {
          navMenu.style.display = 'flex';
        }
      });

      closeButton.addEventListener('click', function() {
        navMenu.style.display = 'none';
      });
    </script>
    ";
  ?>
</body>
</html>