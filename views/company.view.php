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
<h2 id="img_main"><img src="static/apps/noviusos_templates_rw/company/img/ttl.jpg" alt="会社概要"></h2>

<!--↓↓contents↓↓-->
<div id="contents" class="clearfix"> 

<!--↓↓main↓↓-->
<div id="main">

<section class="company_set">
<h3 class="ttl_n"><span>会社概要</span></h3>

<table cellpadding="0" cellspacing="0" border="0">
<tr><th>会社名</th><td>レスキューワーク株式会社</td></tr>
<tr><th>本社所在地</th><td>480-0123 愛知県丹羽郡大口町二ツ屋2-34</td></tr>
<tr><th>会社成立</th><td>2013年5月17日</td></tr>
<tr><th>資本金</th><td>100万円</td></tr>
<tr><th>代表者</th><td>水野史土</td></tr>
<tr><th>事業内容</th>
<td>
PHP 製オープンソースソフトウェアのセキュリティ診断<br />
PHP 製オープンソースソフトウェアの運用コンサルティング<br />
PHP 製オープンソースソフトウェアを用いた開発のサポート</td></tr>
<tr><th>取引銀行</th><td>三菱東京UFJ銀行 犬山支店<br />岐阜信用金庫 楽田支店</td></tr>
</table>
</section>


<section class="company_set">
<h3 class="ttl_n"><span>代表プロフィール</span></h3>

<div class="profile">
オープンソースソフトウェアに積極的に関わっているプログラマー。PHP技術者認定機構上級認定者の一人。<br />
<br />
WordPress のコアコードへの貢献、日本語ファイル作成、ドキュメント作成等を行っている。<br />
WordPress プラグイン「ShowID for Post/Page/Category/Tag/Comment」「Debugging Translation」「Custom Field Snippet」等を公式登録している。登録プラグインの平均評価は4.5を超えている。<br />
<br />
FuelPHP フレームワークの日本語ドキュメント作成を行っている。<br />
FuelPHP で PHPTAL テンプレートエンジンを使うパッケージを作成し、コアに寄贈。<br />
<br />
Novius OS のコアコードへの貢献、日本語ドキュメント作成を行っている。<br />
Novius OS で A/B テストするアプリケーションを作成。<br />
</div>
</section>


<section class="company_set">
<h3 class="ttl_n"><span>レスキューワークの３つの特徴</span></h3>

<div class="feature">
<div class="feature_set">
<h4><span>1</span> PHP 技術の保証</h4>
PHP5技術者認定機構の定めるスタンダードな技術を習得している。
</div>

<div class="feature_set">
<h4><span>2</span> 英語での情報収集および発信</h4>
情報量の多い英語で情報収集および発信することで、最新の情報を素早くキャッチする。
</div>


<div class="feature_set">
<h4><span>3</span> セキュリティを重視</h4>
WordPress 3.5 標準テーマ twentytwelve の潜在的な脆弱性を指摘し、修正する等の貢献をしている。
</div>

</div>
</section>

<section class="company_set">
<h3 class="ttl_n"><span>レスキューワークへのアクセス</span></h3>
<p>名古屋鉄道小牧線楽田駅より徒歩25分</p>
<div class="map">
<iframe max-width="640" max-height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=136.9275,35.323,136.9525,35.338&amp;layer=mapnik&amp;marker=35.33295,136.93012" style="border: 1px solid black"></iframe><br /><small><a href="http://www.openstreetmap.org/?lat=35.3305&amp;lon=136.94&amp;zoom=15&amp;layers=M&amp;mlat=35.3329&amp;mlon=136.93012">View Larger Map</a></small>
</div>
</section>

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