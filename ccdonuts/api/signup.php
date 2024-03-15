<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | 会員登録</title>
</head>
<body class="bodySignup">

  <form action="signupConfirmation.php" method="post">

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
    <h1>会員登録</h1>
    <div class="signupContainer">
      <div class="signupItem">
        <p>お名前<span class="">（必須）</span></p>
        <input type="text" name="name" required>
      </div>
      <div class="signupItem">
        <p>お名前（フリガナ）<span class="">（必須）</span></p>
        <input type="text" name="furigana" required>
      </div>
      <div class="signupItem">
        <p>郵便番号<span class="">（必須）</span></p>
        <div class="postalContainer">
          <input type="text" name="postcode_a" class="postal1" required>
          <input type="text" name="postcode_b" class="postal2" required>
        </div>
      </div>
      <div class="signupItem">
        <p>住所<span class="">（必須）</span></p>
        <input type="text" name="address" required>
      </div>
      <div class="signupItem">
        <p>メールアドレス<span class="">（必須）</span></p>
        <input type="email" name="mail" required>
      </div>
      <div class="signupItem">
        <p>メールアドレス（確認用）<span class="">（必須）</span></p>
        <input type="email" name="confirmMail">
      </div>
      <div class="signupItem">
        <p>パスワード<span class="">（必須）</span></p>
        <p class="redText"><span>半角英数字8文字以上20文字以内で入力してください。※記号の仕様はできません</span></p>
        <input type="password" name="password" required>
      </div>
      <div class="signupItem">
        <p>パスワード（確認用）<span class="">（必須）</span></p>
        <input type="password" name="confirmPassword">
      </div>
    </div>
    <button type="submit" class="formBtn">入力確認する</button>
  </section>

  </form>

</body>
</html>
<?php require '../footer.php'; ?>