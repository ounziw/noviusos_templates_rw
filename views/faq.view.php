<?= \View::forge('noviusos_templates_rw::subviews/header') ?>
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
<h2 id="img_main"><img src="static/apps/noviusos_templates_rw/faq/img/ttl.jpg" alt="よくある質問"></h2>

<!--↓↓contents↓↓-->
<div id="contents" class="clearfix"> 

<!--↓↓main↓↓-->
<div id="main">

<p class="lead">よくある質問についてまとめてみました。</p>

<ul class="link_page clearfix">
<li><a href="#faq_1">エマージェンシーパックについて</a></li>
<li><a href="#faq_2">診断書作成について</a></li>
<li><a href="#faq_3">復旧・再発防止について</a></li>
<li><a href="#faq_4">アドバイスについて</a></li>
<li><a href="#faq_5">サービス全般について</a></li>
</ul>
<?php // $wysiwyg['content'];?>

<?php
/*
<div class="mceNonEditable nosEnhancer" data-enhancer="noviusos_blog" data-config="{&quot;enhancer&quot;:&quot;noviusos_blog&quot;,&quot;item_per_page&quot;:&quot;10&quot;,&quot;cat_idfake&quot;:&quot;1&quot;,&quot;cat_id&quot;:&quot;1&quot;}"></div>
<div class="mceNonEditable nosEnhancer" data-enhancer="noviusos_blog" data-config="{&quot;enhancer&quot;:&quot;noviusos_blog&quot;,&quot;item_per_page&quot;:&quot;10&quot;,&quot;cat_idfake&quot;:&quot;2&quot;,&quot;cat_id&quot;:&quot;2&quot;}"></div>
<div class="mceNonEditable nosEnhancer" data-enhancer="noviusos_blog" data-config="{&quot;enhancer&quot;:&quot;noviusos_blog&quot;,&quot;item_per_page&quot;:&quot;10&quot;,&quot;cat_idfake&quot;:&quot;3&quot;,&quot;cat_id&quot;:&quot;3&quot;}"></div>
<div class="mceNonEditable nosEnhancer" data-enhancer="noviusos_blog" data-config="{&quot;enhancer&quot;:&quot;noviusos_blog&quot;,&quot;item_per_page&quot;:&quot;10&quot;,&quot;cat_idfake&quot;:&quot;4&quot;,&quot;cat_id&quot;:&quot;4&quot;}"></div>
<div class="mceNonEditable nosEnhancer" data-enhancer="noviusos_blog" data-config="{&quot;enhancer&quot;:&quot;noviusos_blog&quot;,&quot;item_per_page&quot;:&quot;10&quot;,&quot;cat_idfake&quot;:&quot;5&quot;,&quot;cat_id&quot;:&quot;5&quot;}"></div>
<p>&nbsp;</p>
*/
$data = '';
for ($cat_id =1;$cat_id <=5;$cat_id++)
{
$data .= '<div class="mceNonEditable nosEnhancer" data-enhancer="noviusos_blog" data-config="{&quot;enhancer&quot;:&quot;noviusos_blog&quot;,&quot;item_per_page&quot;:&quot;10&quot;,&quot;cat_idfake&quot;:&quot;1&quot;,&quot;cat_id&quot;:&quot;' . $cat_id . '&quot;}"></div>';
}

echo \Nos\Nos::parse_wysiwyg($data);
?>

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