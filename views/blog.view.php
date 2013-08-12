<?= \View::forge('noviusos_templates_rw::subviews/header') ?>
<link rel="stylesheet" href="static/apps/noviusos_templates_rw/css/<?php echo e($page->get('page_template'));?>.css">

</head>

<body>
<?= \View::forge('noviusos_templates_rw::subviews/body') ?>
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
<h2 id="img_main"><img src="static/apps/noviusos_templates_rw/blog/img/ttl.jpg" alt="代表者ブログ"></h2>

<!--↓↓contents↓↓-->
<div id="contents" class="clearfix"> 

<!--↓↓main↓↓-->
<div id="main">
<div class="site-content">

                <?= $wysiwyg['content'] ?>

        
</div>
<div class="fb-like-box" data-href="https://www.facebook.com/rescuework" data-width="728" data-height="250" data-show-faces="true" data-stream="true" data-show-border="true" data-header="true"></div>
</div>
<!--↑↑main↑↑-->

<?= \View::forge('noviusos_templates_rw::subviews/blogside',array('page' => $page)) ?>

</div>
<!--↑↑contents↑↑-->


</div>
<!--↑↑　main_contents　↑↑-->
</div>
<!--↑↑　clearfix　↑↑-->

<?= \View::forge('noviusos_templates_rw::subviews/footer') ?>