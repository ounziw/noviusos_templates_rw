<?php $context = $page->get_context(); ?>
<!--↓↓side↓↓-->
<div id="side">
<?php /*
<aside class="widget">
<h3 class="widget-title"><span>アーカイブ</span></h3>
<ul>
<li><a href="#" title="">2013年5月</a></li>
<li><a href="#" title="">2013年5月</a></li>
<li><a href="#" title="">2013年5月</a></li>
<li><a href="#" title="">2013年5月</a></li>
<li><a href="#" title="">2013年5月</a></li>
</ul>
</aside>
*/ ?>
<aside class="widget">
<?php
    $posts = \Nos\BlogNews\Rwblog\Model_Category::get_query(array('context'=>$context));
    echo \View::forge('noviusos_rwblog::front/post/category_list', array('categorylist' => $posts,'context'=>$context), false);
?>
</aside>
<?php /*
<aside id="tag_cloud-2" class="widget widget_tag_cloud">
<?php
    $posts = \Nos\BlogNews\Rwblog\Model_Tag::get_query(array('context'=>$context));
    echo \View::forge('noviusos_rwblog::front/post/tag_list', array('taglist' => $posts,'context'=>$context), false);
?>

</aside>
*/ ?>

<!--↓↓nwes_blog↓↓-->
<section class="blog_box">
<h3 class="ttl_side"><span>最近の記事</span></h3>
<?php

    $blogslug = 'blog';
    $posts = \Nos\BlogNews\Rwblog\Model_Post::get_all(array('enhancer'=>'noviusos_rwblog','context'=>$context,'limit'=>5,'order_by'=>array('post_created_at'=>'DESC')));
    foreach ($posts as $post) {
    //var_dump($post);
    echo \View::forge('noviusos_rwblog::front/post/sidebar', array('item' => $post,'slug'=> $blogslug), false);
    }

?>
</section>
<!--↑↑nwes_blog↑↑-->

<?= \View::forge('noviusos_templates_rw::subviews/book') ?>




</div>
<!--↑↑side↑↑-->