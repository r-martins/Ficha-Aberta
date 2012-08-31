
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ficha Aberta</title>
    <?php if (isset($metas)) { ?>
    <meta property="og:type" content="fichaaberta:<?php echo $metas["type"];?>">
    <meta property="og:url" content="<?php echo $metas["url"];?>">
    <meta property="og:title" content="<?php echo $metas["title"];?>">
    <meta property="og:image" content="<?php echo $metas["image"];?>">
    <meta property="og:description" content="<?php echo $metas["description"];?>">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/fichaaberta.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=202233506573421";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

    
    <div id="fb-root"></div>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="<?php echo base_url();?>">Ficha Aberta</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url();?>">Início</a></li>
              <li><a href="<?php echo base_url();?>sobre/">Sobre</a></li>
              <li><a href="<?php echo base_url();?>partidos/">Partidos</a></li>
              <li><a href="<?php echo base_url();?>candidatos/">Candidatos</a></li>
            </ul>
                <?php if ($this->session->userdata("usuario_logado",false)) { ?>
            <div class="navbar-form pull-right">
                Olá <b><?php echo $this->session->userdata("usuario_nome_primeiro");?></b>! <a class="btn" href="<?php echo base_url();?>logout/">Sair</a>
            </div>
                <?php } else { ?>
            <div class="navbar-form pull-right fblogin">
                <a href="<?php echo base_url();?>login/?back=<?php echo urlencode($_SERVER["REQUEST_URI"]);?>"><img src="<?php echo base_url();?>assets/img/facebook_connect.png" alt="Conectar com Facebook" border="0"/></a>
            </div>
                <?php } ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">