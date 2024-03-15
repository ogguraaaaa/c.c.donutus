<?php session_start(); ?>
<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="../common/reset.css">
  <link rel="stylesheet" href="../styles/style.css">
  <title>C.C.Donuts | 会員登録入力確認</title>
</head>
<body class="bodySignupConfirmation">

  <?php
    $name=$_REQUEST['name'];
    $furigana=$_REQUEST['furigana'];
    $postcode_a=$_REQUEST['postcode_a'];
    $postcode_b=$_REQUEST['postcode_b'];
    $address=$_REQUEST['address'];
    $mail=$_REQUEST['mail'];
    $confirmMail=$_REQUEST['confirmMail'];
    $password=$_REQUEST['password'];
    $confirmPassword=$_REQUEST['confirmPassword'];
  ?>

  <form action="signupSuccess.php" method="post">

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
    <h1>入力確認</h1>
    <div class="signupContainer">
      <div class="signupItem">
        <p>お名前<span class="">（必須）</span></p>
        <label for="" class="confirmationLabel">
        <?php echo htmlspecialchars($name); ?>
        <input type="hidden" value="<?php echo $name ?>" name="name">
      </div>
      <div class="signupItem">
        <p>お名前（フリガナ）<span class="">（必須）</span></p>
        <label for="" class="confirmationLabel">
        <?php echo htmlspecialchars($furigana); ?>
        <input type="hidden" value="<?php echo $furigana ?>" name="furigana">
      </div>
      <div class="signupItem">
        <p>郵便番号<span class="">（必須）</span></p>
        <div class="postalContainer">
          <label for="" class="confirmationLabel">
          <?php echo htmlspecialchars($postcode_a .''. $postcode_b); ?>
          <input type="hidden" value="<?php echo $postcode_a ?>" name="postcode_a">
          <input type="hidden" value="<?php echo $postcode_b ?>" name="postcode_b">
        </div>
      </div>
      <div class="signupItem">
        <p>住所<span class="">（必須）</span></p>
        <label for="" class="confirmationLabel">
        <?php echo htmlspecialchars($address); ?>
        <input type="hidden" value="<?php echo $address ?>" name="address">
      </div>
      <div class="signupItem">
        <p>メールアドレス<span class="">（必須）</span></p>
        <label for="" class="confirmationLabel">
        <?php echo htmlspecialchars($mail); ?>
        <input type="hidden" value="<?php echo $mail ?>" name="mail">
      </div>
      <!-- <div class="signupItem">
        <p>メールアドレス（確認用）<span class="">（必須）</span></p>
        <label for="" class="confirmationLabel">
        <?php echo htmlspecialchars($confirmMail); ?>
      </div> -->
      <div class="signupItem">
        <p>パスワード<span class="">（必須）</span></p>
        <label for="" class="confirmationLabel">
        <?php echo htmlspecialchars($password); ?>
        <input type="hidden" value="<?php echo $password ?>" name="password">
      </div>
      <!-- <div class="signupItem">
        <p>パスワード（確認用）<span class="">（必須）</span></p>
        <label for="" class="confirmationLabel">
        <?php echo htmlspecialchars($confirmPassword); ?>
      </div> -->
    </div>
    <button type="submit" class="formBtn">登録する</button>
  </section>

  </form>

</body>
</html>
<?php require '../footer.php'; ?>