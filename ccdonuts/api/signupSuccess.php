<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | 会員登録完了</title>
</head>
<body class="bodyLoginSuccess">

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
  $pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
  if (isset($_SESSION['customer'])) {
    $id=$_SESSION['customer']['id'];
    $sql=$pdo->prepare('select * from customers where id!=? and mail=?');
    $sql->execute([$id, $_REQUEST['mail']]);
  } else {
    $sql=$pdo->prepare('select * from customers where mail=?');
    $sql->execute([$_REQUEST['mail']]);
  }
  if (empty($sql->fetchALL())) {
    if (isset($_SESSION['customer'])) {
      $sql=$pdo->prepare('update customers set name=?, furigana=?, postcode_a=?, postcode_b=?, '.
                         'address=?, mail=?, password=? where id=?');
      $sql->execute ([
        $_REQUEST['name'], $_REQUEST['furigana'], $_REQUEST['postcode_a'], $_REQUEST['postcode_b'],
        $_REQUEST['address'], $_REQUEST['mail'], $_REQUEST['password'], $id]);
      $_SESSION['customer']=[
        'id'=>$id, 'name'=>$_REQUEST['name'], 'furigana'=>$_REQUEST['furigana'], 
        'postcode_a'=>$_REQUEST['postcode_a'], 'postcode_b'=>$_REQUEST['postcode_b'],
        'address'=>$_REQUEST['address'], 'mail'=>$_REQUEST['mail'], 'password'=>$_REQUEST['password']];
      echo '<h2>お客様情報を更新しました。</h2>';
    } else {
      $sql=$pdo->prepare('insert into customers values(null,?,?,?,?,?,?,?)');
      $sql->execute([
        $_REQUEST['name'], $_REQUEST['furigana'],  $_REQUEST['postcode_a'],  $_REQUEST['postcode_b'],
        $_REQUEST['address'],  $_REQUEST['mail'],  $_REQUEST['password']]);
      echo <<<HTML
      <h1>会員登録完了</h1>
      <div class="loginContainer">
      <div class="loginFrame">
        <p>会員登録が完了しました。</p>
        <p>ログインページへお進みください。</p>
      </div>
      <a hred=""><p class="registerLink">クレジットカード登録へすすむ</p></a>
      <a hred=""><p class="registerLink">購入確認ページへすすむ</p></a>
      </div>
      HTML;
    }
  } else {
    echo '<h2>メールアドレスが無効です、変更してください。</h2>';
  }
  ?>

</body>
</html>
<?php require '../footer.php'; ?>