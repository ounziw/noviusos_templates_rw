<nav id="nav" class="clearfix">

<h1><a href="/"><img src="static/apps/noviusos_templates_rw/img/logo.gif" alt="レスキューワーク株式会社"></a></h1>

<div class="box_header_r">
    <?php
    //$page = \Nos\Nos::main_controller()->getPage();
    $others_contexts = $page->find_other_context();
    $links = array();
    foreach ($others_contexts as $page_context) {
        if ($page_context->published()) {
            $context = $page_context->get_context();
            $links[] = '<a '.$page_context->link().'>'.\Nos\Tools_Context::contextLabel($context).'</a>';
        }
    }
    if (!empty($links)) {
        ?>
        <div class="en"><span><?= strtr('{{contexts}}', array(
                    '{{contexts}}' => implode(' | ', $links),
                )); ?></span></div>
    <?php
    }

    ?>

<div class="menu_h clearfix"><span class="top"><a href="http://www.rescuework.jp/">トップ</a></span>
<span><a href="http://www.rescuework.jp/service.html">サービス内容</a></span>
<span><a href="http://www.rescuework.jp/faq.html">よくある質問</a></span>
<span><a href="http://www.rescuework.jp/company.html">会社概要</a></span>
<span><a href="http://www.rescuework.jp/blog.html">ブログ</a></span>
<span><a href="https://www.rescuework.jp/contact.html">お問い合わせ</a></span>
</div>
</div>

</nav>
