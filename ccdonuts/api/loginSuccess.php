<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | ログイン完了</title>
</head>
<body class="bodyLoginSuccess">

  <?php
  unset($_SESSION['customer']);
  $pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
  $sql=$pdo->prepare('select * from customers where mail=? and password=?');
  $sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
  foreach ($sql as $row) {
    $_SESSION['customer']=[
      'id'=>$row['id'], 'name'=>$row['name'], 'furigana'=>$row['furigana'],
      'postcode_a'=>$row['postcode_a'], 'postcode_b'=>$row['postcode_b'], 'address'=>$row['address'],
      'mail'=>$row['mail'], 'password'=>$row['password']];
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
  <?php
    if (isset($_SESSION['customer'])) {
      echo <<<HTML
      <h1>ログイン完了</h1>
      <div class="loginContainer">
      <div class="loginFrame">
        <p>ログインが完了しました。</p>
        <p>引き続きお楽しみください。</p>
      </div>
      <a href="purchaseConfirmation.php"><p class="registerLink">購入確認ページへすすむ</p></a>
      <a href="../index.php"><p class="registerLink">TOPページへもどる</p></a>
      <a href="logout.php"><p class="registerLink">ログアウト</p></a>
      </div>
      HTML;
    } else {
      echo '<h2>メールアドレスまたはパスワードが違います。</h2>';
    }
  ?>
  </section>

</body>
</html>
<?php require '../footer.php'; ?>