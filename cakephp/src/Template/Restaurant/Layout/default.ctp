<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title><?= $title ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('restaurant.min.css') ?>
    <?= $this->element('meta') ?>

    <!-- Required Core Stylesheet -->
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <!-- Optional Theme Stylesheet -->
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">

    <style type="text/css">
        <!--[if IE]>
         .navbar {
          height: 94px !important;
         }
         .col-12 {
          flex: none;
         }
        <![endif]-->
    </style>


    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <style>@import url('https://fonts.googleapis.com/css?family=Amatic+SC|Arvo|Cabin|Indie+Flower|Nunito|Tajawal|Meddon|Alegreya+Sans');</style>
</head>
<body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFN3WRJ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <?= $this->element('navbar') ?>
        <!-- HTML code of flash element if needed ? (use toastr.js probably way better) -->
        <?= $this->Flash->render() ?>
        <main>
            <?= $this->fetch('content') ?>
        </main>
        <?= $this->element('footer') ?>
        <?= $this->Html->script('restaurant.min.js') ?>
        <?= $this->fetch('footer_javascript') ?>
</body>
</html>
