<?= \View::forge('noviusos_templates_rw::subviews/header') ?>
<link rel="stylesheet" href="static/apps/noviusos_templates_rw/css/<?php echo e($page->get('page_template'));?>.css">
<script src="static/apps/noviusos_templates_rw/js/ui.core.js" type="text/javascript"></script>
<script src="static/apps/noviusos_templates_rw/js/ui.tabs.js" type="text/javascript"></script>
<script src="static/apps/noviusos_templates_rw/js/service.js" type="text/javascript"></script>
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
<h2 id="img_main"><img src="static/apps/noviusos_templates_rw/service/img/ttl.jpg" alt="サービス内容"></h2>

<!--↓↓contents↓↓-->
<div id="contents" class="clearfix"> 

<!--↓↓main↓↓-->
<div id="main">

<p class="lead">各種サービス内容についてです。<span>※価格はすべて税込みです。</span></p>

<div class="btn_menu clearfix">
<div class="btn_set"><a href="#box_service01">診断書作成について</a></div>
<div class="btn_set"><a href="#box_service02">復旧について</a></div>
<div class="btn_set"><a href="#box_service03">再発防止について</a></div>
<div class="btn_set"><a href="#box_service04" class="font_s">制作/保守管理に関する<br />アドバイスについて</a></div>
</div>



<section class="box_em" id="box_em">

<div class="img_em"><img src="static/apps/noviusos_templates_rw/service/img/bnr_em.gif" alt=""></div>

<div class="txt_kome">
<p>※1　復旧および再発防止作業を優先する為、診断書の作成は致しません。一通りの作業が完了した後、作業内容の報告を致します。</p>
<p>※2　エマージェンシーパックにおける復旧、再発予防の作業方針は、なるべく速やかに最低限運営可能な状態にするというものであり、継続した運営に向けた改善策では無い場合があります。そちらをご希望の場合は、暫定の作業が終了した後、改めて診断からスタートさせて頂きます。</p>
<p>※3　障害等の情況によっては、基本価格内で対処不可能な場合があります。その際は作業の途中でも、別途必要となる作業費や条件などを提示いたしますので、継続対処するか否かを協議願います。</p>
<p>※4　その他ご不明な点は、作業のご依頼時にご説明させて頂きます。<br />
0120-969-503</p>
</div>
</section>


<section id="box_service01" class="box_service">
<h3 class="ttl_n"><span>診断書作成について</span></h3>
<div class="lower_box">


<div id="container-1">
<ul class="clearfix">
<li><a href="#fragment-1"><span>A.サイト診断</span></a></li>
<li><a href="#fragment-2"><span>B.業者診断</span></a></li>
<li><a href="#fragment-3"><span>C.企画診断</span></a></li>
</ul>

<div id="fragment-1" class="inner">
<h4 class="shindan"><span>サイト診断</span></h4>

<div class="clearfix">
<div class="txt_box mr10">
<h5>WordPress使用サイトについて</h5>
<p>ここ数年で企業サイトでも多く採用される様になったWordPress（ワードプレス）に関係するトラブルが非常に増えてきました。<br />
障害の規模や内容が把握できなかったり、何かの事情で制作担当業者に作業依頼ができないなどのケースも対処いたします。<br />
お困りの際はレスキューワークまでご相談下さい。</p>
</div>

<div class="txt_box">
<h5>WordPress以外のサイトについて</h5>
<p>御社独自で開発・制作したWEBサイトのトラブルにも対処しています。<br />
障害の状況やWEBサイトの仕様、ご提供頂く資料を手掛かりに、復旧や再発防止に関する診断を致します。<br />
お困りの際はレスキューワークまでご相談下さい。</p>
</div>
</div>

<h4 class="ttl_normal">価格</h4>

<p class="wordpress">※　<img src="static/apps/noviusos_templates_rw/service/img/icon_w.gif" alt="WordPress" /> とあるのはWordPressベースの場合のメニューです。</p>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><th>総合診断</th><td>￥18,900（基本料金となります）</td></tr>
<tr><th><img src="static/apps/noviusos_templates_rw/service/img/icon_w.gif" alt="WordPress" />サーバー診断/ <img src="static/apps/noviusos_templates_rw/service/img/icon_w.gif" alt="WordPress" />コアファイル診断/ <img src="static/apps/noviusos_templates_rw/service/img/icon_w.gif" alt="WordPress" />初期設定診断/ <img src="static/apps/noviusos_templates_rw/service/img/icon_w.gif" alt="WordPress" />データベース診断</th><td>1メニュー￥9,450～　内容に応じてお見積もり<br />4メニューセットでお見積もり金額から20％off</td></tr>
<tr><th><img src="static/apps/noviusos_templates_rw/service/img/icon_w.gif" alt="WordPress" />テーマ診断</th><td>¥14.175~　内容に応じてお見積もり</td></tr>
<tr><th><img src="static/apps/noviusos_templates_rw/service/img/icon_w.gif" alt="WordPress" />プラグイン診断</th><td>5個まで¥14.175~　内容に応じてお見積もり</td></tr>
<tr><th>HTML/CSS/<br />JavaScript/PHP診断</th><td>1ファイル¥4,725　内容に応じてお見積もり</td></tr>
<tr><th>システム診断</th><td>内容に応じてお見積り</td></tr>
<tr><th>その他サイト構成要素診断</th><td>内容に応じてお見積り</td></tr>
</table>
</div>

<div id="fragment-2" class="inner">
<h4 class="shindan"><span>担当業者診断</span></h4>

<p class="lead">WEB制作業者の作業内容や作業コストに不審を感じたり、書類の記載内容がよくわからないなど、お客様が担当業者に対して抱える様々な不安の解消を目指します。<br />
お困りの際はレスキューワークまでご相談下さい。</p>

<h4 class="ttl_normal">価格</h4>
<table cellpadding="0" cellspacing="0" border="0">
<tr><th>総合診断+初期説明診断</th><td>￥18,900（基本料金となります）</td></tr>
<tr><th>契約書診断</th><td>1ページ￥4,725 ※A4版700文字以内を1ページとカウントします</td></tr>
<tr><th>制作仕様書、見積書診断</th><td>1ページ￥4,725 ※A4版700文字以内を1ページとカウントします</td></tr>
<tr><th>弁護士診断</th><td>別途ご相談</td></tr>
</table>
</div>

<div id="fragment-3" class="inner">
<h4 class="shindan"><span>企画書診断</span></h4>

<p class="lead">WEBサイト制作を含む企画が制作・運営上の致命的な欠陥を含んでいないか、また制作・運営の予算配分が適切かどうかなどを検証いたします。<br />
お困りの際はレスキューワークまでご相談下さい。</p>

<h4 class="ttl_normal">価格</h4>
<table cellpadding="0" cellspacing="0" border="0">
<tr><th>総合診断</th><td>￥18,900（基本料金となります）</td></tr>
<tr><th>企画書診断</th><td>1ページ￥4,725 ※A4版700文字以内を1ページとカウントします</td></tr>
</table>
</div>
</div>


</div>
</section>
<p class="service_pagetop"><a href="#top">▲ ページトップへ戻る</a></p>


<section id="box_service02" class="box_service">
<h3 class="ttl_n"><span>復旧について</span></h3>
<div class="lower_box">
<p class="lead">診断書の内容に基づき、復旧作業を行います。<br />
WEBサイトを構成するファイルやデータベースの修正、サーバーセッティングや全体構成の見直しなど、障害の内容に応じた対処を致します。</p>

<h4 class="ttl_normal">価格</h4>

<table cellpadding="0" cellspacing="0" border="0">
<tr><th>バックアップデータの生成</th><td>￥18,900～　内容に応じてお見積もり</td></tr>
<tr><th>復旧のボトルネックとなる要素の排除</th><td>内容に応じてお見積もり</td></tr>
<tr><th>バックアップデータからの再構築</th><td>￥18,900～　内容に応じてお見積もり</td></tr>
</table>
</div>
</section>
<p class="service_pagetop"><a href="#top">▲ ページトップへ戻る</a></p>


<section id="box_service03" class="box_service">
<h3 class="ttl_n"><span>再発防止について</span></h3>
<div class="lower_box">
<p class="lead">診断書の内容に基づき、再発防止作業を行います。<br />
復旧した障害の内容とWEBサイトの仕様、御社の運営体制と今後予測されるリスクに応じた対処を致します。</p>

<h4 class="ttl_normal">価格</h4>

<table cellpadding="0" cellspacing="0" border="0">
<tr><th>サーバー初期設定の見直し</th><td>￥9,450～　内容に応じてお見積もり</td></tr>
<tr><th>データベース初期設定の見直し</th><td>￥9,450～　内容に応じてお見積もり</td></tr>
<tr><th>WordPress初期設定の見直し</th><td>￥9,450～　内容に応じてお見積もり</td></tr>
<tr><th>全体構成の可能な範囲での変更</th><td>内容に応じてお見積もり</td></tr>
<tr><th>その他セキュリティ面での<br />ボトルネックとなる要素の排除</th><td>内容に応じてお見積もり</td></tr>
</table>
</div>
</section>
<p class="service_pagetop"><a href="#top">▲ ページトップへ戻る</a></p>


<section id="box_service04" class="box_service">
<h3 class="ttl_n"><span>制作/保守管理に関するアドバイスについて</span></h3>
<div class="lower_box">
<p class="lead">ご依頼頂いた作業を終了した後、制作/保守管理に関するアドバイスを行っております。担当業者の選び方や付き合い方、作業を通して気付いた点なども含め、お伝えさせて頂きます。</p>

<h4 class="ttl_normal">価格</h4>

<table cellpadding="0" cellspacing="0" border="0">
<tr><th>制作/保守管理に関するアドバイス</th><td>無償対応　メールもしくはお電話にて</td></tr>
</table>
</div>
</section>
<p class="service_pagetop"><a href="#top">▲ ページトップへ戻る</a></p>







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