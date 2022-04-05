<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link rel="canonical" href="">
    <meta name="theme-color" content="#000000">
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="format-detection" content="telephone=no">

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

    <title>Seja bem-vindo(a) à Semana Onco Time</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <div class="form-login">
      <span id="close"></span>
      <form method="POST" action="" name="" class="_form" >
        <input type="text" name="" value="" placeholder="Nome / Nombre">
        <input type="email" name="email" id="email"
             pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" placeholder="Email" required title="Email Não pode estar em Branco ou incorreto" required>
        <textarea name="name" rows="8" cols="80" placeholder="Pergunta / Pregunta"></textarea>
        <button type="submit" name="button">MANDAR</button>
      </form>
    </div>
    <div class="overlay"></div>

    <header class="first">
      <div class="container">
        <div class="top">
          <img src="assets/img/top.png" alt="">
          <img src="assets/img/sh_logo_White.png" alt="">
        </div>
        <h1>
          Semana Onco Time
        </h1>
        <span class="timer"></span>

        <div class="video" style="max-width: 820px; width: 100%; margin: 30px auto;display:none;">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/TbvH7BFK7uE' frameborder='0' allowfullscreen></iframe></div>
        </div>
        <div class="btns">
          <a href="#" class="btn pergunta">PERGUNTA/PREGUNTA</a>
          <a href="https://www.siemens-healthineers.com/mx/news-and-events/conferences-events-new/feedback-semana-onco-time" target="_blank" class="btn">
            Solicite o seu certificado e compartilhe a sua opinião
            <br><br>
            Solicite su certificado y compártanos su opnión
          </a>
        </div>
      </div>
    </header>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <script type="text/javascript">
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

      $("#close, .overlay").click(function(e){
        $(".form-login, .overlay").removeClass('act');
        e.preventDefault();
      });
    });
    </script>
  </body>
</html>
