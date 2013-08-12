<?= \View::forge('noviusos_templates_rw::subviews/header') ?>
<link rel="alternate" type="application/rss+xml" title="投稿一覧" href="http://www.rescuework.jp/blog/rss/posts.html">
<link rel="stylesheet" href="static/apps/noviusos_templates_rw/css/<?php echo e($page->get('page_template'));?>.css">
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
<div id="img_main"><img src="static/apps/noviusos_templates_rw/home/img/img_main.jpg" alt="WordPress 診断、復旧、再発防止"></div>

<!--↓↓contents↓↓-->
<div id="contents" class="clearfix"> 

<!--↓↓main↓↓-->
<div id="main">


<!--↓↓レスキューワークの強み↓↓-->
<section class="tokucho">
<h2 class="ttl_n"><span>レスキューワークの業務内容と強み</span></h2>

<dl>
<dt><span>その1</span></dt>
<dd>レスキューワークはホームページ制作・運営時のトラブルやお悩みの解決をお手伝いします。</dd>
</dl>

<dl>
<dt><span>その2</span></dt>
<dd>緊急性の高いトラブル、難易度の高いトラブルにも対処しています。</dd>
</dl>

<dl>
<dt><span>その3</span></dt>
<dd>人気のCMS「WordPress<img src="static/apps/noviusos_templates_rw/home/img/icon_w.gif" alt="wordpress">」に関係するトラブル解決は、特に経験豊富です。</dd>
</dl>

</section>
<!--↑↑レスキューワークの強み↑↑-->


<!--↓↓流れ↓↓-->
<section class="tokucho">
<h2 class="ttl_n"><span>ご依頼から作業完了までの流れ</span></h2>

<div class="flow_box">
<h3><img src="static/apps/noviusos_templates_rw/home/img/ttl_01.png" alt="通常のご依頼"></h3>
<div class="img_flow"><img src="static/apps/noviusos_templates_rw/home/img/flow_01.gif" alt="通常のご依頼"></div>
<div class="btn_service"><a href="service.html">詳しい内容、価格は「サービス内容」を御覧ください。</a></div>
</div>

<div class="flow_box">
<h3><img src="static/apps/noviusos_templates_rw/home/img/ttl_02.png" alt="緊急のご依頼"></h3>
<div class="img_flow"><img src="static/apps/noviusos_templates_rw/home/img/flow_02.gif" alt="緊急のご依頼"></div>
<div class="btn_service"><a href="service.html#box_em">詳しい内容、価格は「サービス内容」を御覧ください。</a></div>
</div>

</section>
<!--↑↑流れ↑↑-->

<!--↓↓tel↓↓-->
<?= \View::forge('noviusos_templates_rw::subviews/tel') ?>

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