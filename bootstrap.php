<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

# loadViewConfig()
# LOADS CONFIG FOR THE CURRENT VIEW
# You can add configs in the file config/template.config.php

namespace Nos\Templates\Rw;

function loadViewConfig()
{
    \Config::load('noviusos_templates_rw::template', 'template');
    $config = \Config::get('template');

    return $config;
}
/*
$js = <<<EOD
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41689807-1', 'rescuework.jp');
  ga('send', 'pageview');

EOD;
\Nos\Nos::main_controller()->addJavascriptInline($js, false);
*/