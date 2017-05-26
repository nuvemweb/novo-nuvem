<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Classificados Prime">
        <meta name="robots" content="index,follow">
        <link rel="shortcut icon" href="<?php echo $this->request->base ?>/img/favicon.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

  <?php
    echo $this->Html->css(array('style', '../app/webroot/fonts/style-fonts','bootstrap','style-menu','animate'));
    echo $this->Html->script(array('typed','typed.min','bootstrap','bootstrap.min','jquery.easing.1.3'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->fetch('fonts');


    ?>
      
    </head>

    <body>


    <?php echo $this->Element('header'); ?>
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->Element('footer'); ?>
    </body>



</html>

