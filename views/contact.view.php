<?= \View::forge('noviusos_templates_rw::subviews/header') ?>
    <script type="text/javascript" src="static/apps/noviusos_templates_rw/js/jquery.gafunc.min.js"></script>
</head>

<body>
<a name="#top" id="top"></a>
<div class="txt_seo">WordPressでのサイト運営でトラブルが発生した方、制作業者、保守管理業者との間にトラブルが発生した方、WordPressでの制作に不安がある方へ</div>

<!--wrapperSt-->
<div id="wrapper">

<div id="wrapper_inner">

<!--↓↓　clearfix　↓↓-->
<div class="clearfix">
<!--↓↓　left_nav　↓↓-->
    <?= \View::forge('noviusos_templates_rw::subviews/menu',array('page' => $page)) ?>

<!--↑↑ left_nav ↑↑-->

<!--↓↓　main_contents　↓↓-->
<div id="main_contents">

<!--img_main-->
<h2 id="img_main"><img src="static/apps/noviusos_templates_rw/contact/img/ttl.jpg" alt="問い合わせ"></h2>

<!--↓↓contents↓↓-->
<div id="contents" class="clearfix"> 

<!--↓↓main↓↓-->
<div id="main">
<?=$wysiwyg['content'];?>

<div class="sslbanner">
<a href="https://smartssl.kagoya.jp/www.rescuework.jp/" target="_blank">
<img src="static/apps/noviusos_templates_rw/contact/img/KAGOYA_SmartSSL_seal.png" alt="クリックして証明書の内容をご確
認ください。" width="80" height="80" border="0"></a>
</div>

<!--↓↓tel↓↓-->
<?php // \View::forge('noviusos_templates_rw::subviews/tel') ?>

<!--↑↑tel↑↑-->

</div>
<!--↑↑main↑↑-->

<?= \View::forge('noviusos_templates_rw::subviews/side') ?>


</div>
<!--↑↑contents↑↑-->


</div>
<!--↑↑　main_contents　↑↑-->
</div>
<!--↑↑　clearfix　↑↑-->

<?= \View::forge('noviusos_templates_rw::subviews/footer') ?>