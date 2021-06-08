<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
  </head>

  <body>

    <!-- Riscrivere questa pagina del sito google https://policies.google.com/faq. Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

    <?php
      include('data/db.php')
    ?>

    <header>
      
      <div class="container">
        <div class="header-top clearfix">
          <div class="left">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/368px-Google_2015_logo.svg.png" alt="google-logo">
            <span>Privacy e termini</span>
          </div>
          <div class="right">         
            <img src="assets/img/avatar.jpg" alt="avatar">
          </div>     
        </div>
        <div class="header-bottom clearfix">
          <ul>
            <?php 
              foreach($links as $link) {
                if($link == 'Domande Frequenti') {
                  ?>
                  <li>
                    <a href="" class="active">
                      <?php echo $link ?>
                    </a>
                  </li>
                  <?php
                } else {
                ?>
                <li>
                  <a href="">
                    <?php echo $link ?>
                  </a>
                </li>
                <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>

    </header>

    <main>
    
      <div class="container">
        
        <?php

        foreach($db as $question) {
          ?>
          <h3><?php echo $question['question'] ?></h3>
          <span><?php echo $question['answer'] ?></span>
          <?php
        }

        ?>

      </div>
  
    </main>
   
  </body>

</html>