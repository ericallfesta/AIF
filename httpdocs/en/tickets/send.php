<?php
header('Content-Type: text/html; charset=UTF-8');
header('Content_Language: ja');
$to = 'registration@aif21c.com';         //送信先メールアドレス
$subj = 'お問い合わせ';     //件名
$mess = '名前: ' . $_POST["name"] ."\r\n".'メールアドレス: ' .$_POST["email"] ."\r\n".'電話番号: '. $_POST["tel"]  ;
$from = 'From: '.$_POST["email"] ; //送信元メールアドレス
mb_language('uni');
mb_internal_encoding('UTF-8');
mb_send_mail($to, $subj, $mess, $from); //メール送信
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>sample</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h3 class="text-center">Send Compleate!!</h3>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h3>Date</h3>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h3>Wednesday, December 2 , 2015</h3>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h3>Venue</h3>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h3>Toranomon Hills Forum, Hall A</h3>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h3>Capacity</h3>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h3>300 people</h3>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h3>Entrance Fee</h3>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h3>Adults : 5,000 JPY</h3>
            <h3>Students : 1,000 JPY</h3>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h3>Reception Fee</h3>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h3>Adults : 5,000 JPY</h3>
            <h3>Students : 3,000 JPY</h3>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt30">
            <h3 class="text-center">Send Details</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h3>Name:</h3>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h3><?php echo htmlspecialchars($_POST["name"],ENT_QUOTES); ?></h3>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h3>E-Mail:</h3>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h3><?php echo htmlspecialchars($_POST["email"],ENT_QUOTES); ?></h3>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h3>TEL:</h3>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h3><?php echo htmlspecialchars($_POST["tel"],ENT_QUOTES); ?></h3>
          </div>
        </div>
        <div class="text-center back">
          <a href="../index.html" title=""><button type="button">Back</button></a>
        </div>
      </div>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
