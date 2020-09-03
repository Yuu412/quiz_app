<?php
 $num_correct = $_POST['num_correct'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3択クイズ 結果</title>
    <link rel="stylesheet" type="text/css" href="result.css">
  </head>
  <body>
        <div class="main">
      <div class="site-logo">
        <img src="img/quiz.png" alt="logo">
      </div>
      <div class="question-title">
        クイズタイトル：〇〇について
      </div>
      <div class="border-hedder"></div>

      <div class="question-result">
        あなたは、3問中<?php echo "$num_correct";?>問正解しました。<br>
      </div>


      <div class="end-button">
        <a href= "index.php" >
          <img src="img/end-button.png" alt="logo">
        </a>
      </div>
    </div>
  </body>
</html>
