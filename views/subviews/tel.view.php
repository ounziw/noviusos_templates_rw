<?php 
$onservice = false;
$localtime_assoc = localtime(time(), true);
/* if ($localtime_assoc['tm_hour'] >= 9 && $localtime_assoc['tm_hour'] < 18) */
if ($localtime_assoc['tm_wday'] >= 1 && $localtime_assoc['tm_wday'] <=5 &&
    $localtime_assoc['tm_hour'] >= 9 && $localtime_assoc['tm_hour'] < 18) 
{
    $onservice = true;
}
?>
<?php if ($onservice) :?>
<div class="bnr_tel"><a href="https://www.rescuework.jp/contact.html"><img src="static/apps/noviusos_templates_rw/img/bnr_tel.gif" alt="お気軽にお問い合わせください！"></a></div>
<?php else : //($onservice) ?>
<div class="bnr_tel"><a href="https://www.rescuework.jp/contact.html"><img src="static/apps/noviusos_templates_rw/img/bnr_tel_e.gif" alt="メールのみ受付ております"></a></div>
<?php endif ; // ($onservice) ?>