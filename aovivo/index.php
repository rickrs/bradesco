<?php session_start();?>
<!DOCTYPE html>

<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/favicon.ico" sizes="32x32" />
    <link rel="canonical" href="">
    <meta name="theme-color" content="#000000">
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- SEO -->
    <meta name="description" content=""/>
    <meta name="keywords" content="">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta itemprop="name" content=""/>
    <meta itemprop="description" content="">

    <title>Bradesco Open Box - Powered by Capgemini</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body style="padding: 0;">

    <style media="screen">
    .container {
      max-width: 1080px;
    }
    .lista a {
      display: block;
    }
    .lista a img {
      max-width: 70px;
      margin: 10px 0;
    }
    .lista a {
      position: relative;
      display: block;
      border-bottom: 1px dotted black;
    }

    .lista a .tooltiptext {
      visibility: hidden;
      width: 200px;
      background-color: black;
      color: #fff;
      font-family: 'Calibri';
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      right: -200px;
      top: 30px;
    }

    .lista a:hover .tooltiptext {
      visibility: visible;
    }
    @media only screen and (max-width: 680px) {
      .bloco{
        display: block !important;
      }
      .lista{
        margin: 0 auto;
      }
      .lista a{
        margin: 0 auto !important;
      }
      .lista a img {
        max-width: 50px !important;
      }
      footer{
        padding: 30px !important;
      }
      .lista a .tooltiptext{
        display: none;
      }
      .container {
        max-width: 300px !important;
      }
    }
    </style>

    <div class="form-login">
      <span id="close"></span>
      <form method="POST" action="" id="formpergunta" name="" class="_form" >
        <input type="text" name="nome" id="nome" value="" placeholder="Nome" required>
        <input type="email" name="email" id="email"
             pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" placeholder="Email" required title="Email Não pode estar em Branco ou incorreto" value="<?php echo $_SESSION["email"]?>" required>
        <textarea name="pergunta" id="pergunta" rows="8" cols="80" placeholder="Pergunta" required></textarea>
        <button type="submit" id="enviarpergunta" name="button">Enviar</button>
      </form>
    </div>
    <div class="overlay"></div>

    <div class="top" style="padding: 60px 0 0;">
      <div class="container">
        <img src="assets/img/logo-branca.png" alt="" style="width: 330px; display: block; margin: 0 auto;">
      </div>
    </div>

    <header class="first" style="padding-bottom: 0 !important;">
      <div class="container">
        <span class="timer"></span>

        <div class="bloco">
          <div class="video" style="max-width: 820px; width: 100%; margin: 30px auto;display:none;">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://player.vimeo.com/video/696060469?h=9310ae18e4' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
          </div>

          <div class="lista" style="display: block;">
            <a href="#" class="pergunta" style="background: transparent; display: block; max-width: 300px; width: 100%; padding: 10px 10px; box-sizing: border-box; font-size: 18px; color: #ffff; text-decoration: none; text-align: center; border: 1px solid #37B3E4; font-family: 'Ubuntu', sans-serif;margin: 0 auto;">
            ENVIE SUA PERGUNTA
            </a>
          </div>
        </div>
      </div>
    </header>

    <footer class="rodape">
      <div class="container">
        <h3>
        APOIO
        </h3>
        <img src="assets/img/logos-apoiadores.png" alt="">
      </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <script type="text/javascript">

      function update() {
        console.log("chamei update");
    $.ajax({
        Type: "get",
        url: 'update.php', //php

        success: function (response) {
            //on receive of reply
            var a = response;
            if(a == "1"){
              //window.location.href = "https://www.siemens-healthineers.com/co/news-and-events/conferences-events-new/feedback-semana-cardio-time-21";
            }
        }
    });
}



    $(document).ready(function() {




      $(".timer")
      .countdown("2021/03/05 11:09:00", function(event) {
        $(this).text(
          event.strftime('%H horas %Mm %Ss')
        ).on('finish.countdown', function(event) {
          $('.timer').css('display', 'none');
          $('.video').css('display', 'block');
          $('.btns').css('display', 'block');
        });
      });

      $(".pergunta").click(function(e){
        $(".form-login, .overlay").toggleClass('act');

        e.preventDefault();
      });


       $("#enviarpergunta").click(function(){
       $("#formpergunta").submit(function(event) {
        event.preventDefault();

        var form_data = $(this).serialize();

        console.log(form_data);
        $.ajax({
           url : "process.php",
           type: "POST",
           data : form_data
           }).done(function(response){ //

            //   $(".pergunta").hide();
              $(".form-login, .overlay").removeClass('act');
              console.log("enviado");


          });




       });


  });



      $("#close, .overlay").click(function(e){
        $(".form-login, .overlay").removeClass('act');
        e.preventDefault();
      });

      setInterval(update, 5000);
    });







    </script>
  </body>
</html>
