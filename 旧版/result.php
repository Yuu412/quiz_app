
 <?php

 //入力された値の設定
 $num_correct = $_POST['num_correct'];
 ?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>結果発表</title>
    <link rel="stylesheet" type="text/css" href="result.css">
  </head>
  <body>
        <div class="main">
    <header class="site-header flex flex--bet">
      <div class="site-logo">
        <img src="img/quiz.png" alt="logo">
      </div>
      <div class="question-title">
        クイズタイトル：〇〇について
      </div>
      <div class="border-hedder"></div>
    </header>
    <div class="question-result">
      あなたは、3問中<?php echo "$num_correct";?>問正解しました。<br>
    </div>


      <div class="return-button">
        <a href= "index.html" >
        <img src="img/end-button.png" alt="return">
        </a>
      </div>
    </div>
  </body>
</html>
