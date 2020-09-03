
<?php

 //入力された値の設定

   $times = $_POST['times'];
   $num_correct = $_POST['num_correct'];
 ?>


<DOCTYPE html>
  <!--お問い合わせフォーム-->
  <html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>QUiz</title>
    <link rel="stylesheet" type="text/css" href="quiz_result.css">
  </head>

  <body>

    <div class="main">
      <header class="site-header flex flex--bet">
        <div class="site-logo">
          <img src="img/quiz.png" alt="logo">
        </div>
        <div class="question-title">
          <?php
                 $a = $times + 1;
                 echo "第","$a","問";?>
        </div>
        <div class="border-hedder"></div>
      </header>


      <div class="start-button">

      </div>


      <div class="q-logo">
        <img src="img/q.png" alt="logo">
      </div>

      <div class="question-instruction">
        <?php
      $question0 = ["世界で2番目に高い山は？","富士山","K2","エベレスト",
                    "img/huzi.jpg","img/k2.jpg","img/everest.jfif"];
      $question1 = ["最初に桃太郎の仲間になったのは？","老夫婦","犬","サル",
                    "img/grandpm.jpg","img/dog.jpg","img/monky.jpg"];
      $question2 = ["円周率の5番目の数字は？","3","2","5",
                    "img/3.png","img/2.png","img/5.png"];

      $arr =[$question0,$question1,$question2];

      ?>
        <?php
       echo $arr[$times][0];
       $response_left =$arr[$times][1];
       $response_center =$arr[$times][2];
       $response_right =$arr[$times][3];

       $response_pic_left = $arr[$times][4];
       $response_pic_center = $arr[$times][5];
       $response_pic_right = $arr[$times][6];
      ?>

      <?php
        $response = $_POST['response'];

         //答えが正解のときの順番
         $answer=["center","left","right"];
         if($response == $answer[$times]){
           $t_or_f = 1;
           $num_correct = $num_correct + 1;
         }
         else{
           $t_or_f = 0;
         }

        if($t_or_f == 1){
          ?>
        <span class="true">
          正解
        </span>
        <?php
      }else{
      ?>
        <span class="false">
          不正解
        </span>
        <?php } ?>
      </div>

      <div class="question-box">

        <?php if($answer[$times] == "left"){ ?>
        <div class="question-box-left-t">
          <div class="c-mark">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
          <div class="question-number1">①</div>
          <div class="question-text"><?php echo $response_left;?>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_left;?>" alt="logo"></div>
        </div>
        <?php }else{ ?>
        <div class="question-box-left-f">
          <div class="question-number1">①</div>
          <div class="question-text"><?php echo $response_left;?>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_left;?>" alt="logo"></div>
        </div>
        <?php } ?>

        <?php if($answer[$times] == "center"){ ?>
        <div class="question-box-center-t">
          <div class="c-mark">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
          <div class="question-number2">②</div>
          <div class="question-text"><?php echo $response_center;?>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_center;?>" alt="logo"></div>
        </div>
        <?php }else{ ?>
        <div class="question-box-center-f">
          <div class="question-number2">②</div>
          <div class="question-text"><?php echo $response_center;?>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_center;?>" alt="logo"></div>
        </div>
        <?php } ?>

        <?php if($answer[$times] == "right"){ ?>
        <div class="question-box-right-t">
          <div class="c-mark">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
          <div class="question-number3">③</div>
          <div class="question-text"><?php echo $response_right;?>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_right;?>" alt="logo"></div>
        </div>
        <?php }else{ ?>
        <div class="question-box-right-f">
          <div class="question-number3">③</div>
          <div class="question-text"><?php echo $response_right;?>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_right;?>" alt="logo"></div>
        </div>
        <?php } ?>
        <br>

        <?php $times = $times + 1;?>
        <?php if($times != 3){ ?>
        <form method="POST" class="form" action="quiz.php">
          <input type="hidden" name="times" value=<?php echo $times;?>>
          <input id="send_button" type="submit" value="次の問題へ" style="background-color:#FFFF99;">
          <input type="hidden" name="num_correct" value=<?php echo $num_correct;?>>
          <?php }else{ ?>
          <form method="POST" class="form" action="result.php">
            <input id="send_button" type="submit" value="結果を表示" style="background-color:#FFFF99;">
            <input type="hidden" name="num_correct" value=<?php echo $num_correct;?>>
          </form>
          <?php } ?>

      </div>
    </div>

  </body>

  </html>
