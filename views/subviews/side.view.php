<!--↓↓side↓↓-->
<div id="side">

<!--↓↓nwes_box↓↓-->
<section class="news_box">
<h3 class="ttl_side"><span>新着情報</span></h3>
<?php
    $newsslug = 'news';
    $newsposts = \Nos\BlogNews\News\Model_Post::get_all(array('enhancer'=>'noviusos_news','context'=>'main::ja_JP','limit'=>5,'order_by'=>array('post_created_at'=>'DESC')));
    foreach ($newsposts as $newspost) {
    echo \View::forge('noviusos_rwblog::front/post/sidebar-news', array('item' => $newspost,'slug'=> $newsslug), false);
    }
?>
<div class="link_news"><a href="http://www.rescuework.jp/<?= e($newsslug);?>.html">ニュース一覧へ</a></div>
</section>
<!--↑↑nwes_box↑↑-->


<!--↓↓nwes_blog↓↓-->
<section class="blog_box">
<h3 class="ttl_side"><span>代表者ブログ</span></h3>
<?php

    $blogslug = 'blog';
    $posts = \Nos\BlogNews\Rwblog\Model_Post::get_all(array('enhancer'=>'noviusos_rwblog','context'=>'main::ja_JP','limit'=>5,'order_by'=>array('post_created_at'=>'DESC')));
    foreach ($posts as $post) {
    //var_dump($post);
    echo \View::forge('noviusos_rwblog::front/post/sidebar', array('item' => $post,'slug'=> $blogslug), false);
    }

?>
<div class="link_blog"><a href="http://www.rescuework.jp/<?= e($blogslug);?>.html">ブログ記事一覧へ</a></div>
</section>
<!--↑↑nwes_blog↑↑-->

<?= \View::forge('noviusos_templates_rw::subviews/book') ?>

<div>
    <a href="http://www.slowfoodjapan.net/" target="_blank"><img src="/static/apps/noviusos_templates_rw/img/amichi_logo_l.jpg" alt="Amici Logo"></a>
    <div class="blog_set"><p>レスキューワーク株式会社は、スローフードを応援しています。</p></div>
</div>
</div>
<!--↑↑side↑↑-->