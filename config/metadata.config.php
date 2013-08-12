<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

$pages = array('top','blog','faq','company','service','contact','news','recruit');
$templates = array();
foreach ($pages as $page) {
    $templates[$page] = array(
            'file' => 'noviusos_templates_rw::' . $page,
            'title' => '' . $page,
            'cols' => 1,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,1,1',
            ),
            'module' => '',
        );
}

return array(
    'name'    => 'RW templates',
    'version' => 'chiba.1',
    'provider' => array(
        'name' => 'RescueWork',
    ),
    'namespace' => 'Nos\Templates\Rw',
    'i18n_file' => 'noviusos_templates_rw::metadata',
    'launchers' => array(
    ),
    'enhancers' => array(
    ),
    'templates' => $templates,
    /*
    'templates' => array(
        'rw_index' => array(
            'file' => 'noviusos_templates_rw::index',
            'title' => 'RW index',
            'cols' => 1,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,1,1',
            ),
            'module' => '',
        ),
        'rw_blog' => array(
            'file' => 'noviusos_templates_rw::blog',
            'title' => 'RW blog',
            'cols' => 1,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,1,1',
            ),
            'module' => '',
        ),
        'rw_faq' => array(
            'file' => 'noviusos_templates_rw::faq',
            'title' => 'RW faq',
            'cols' => 1,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,1,1',
            ),
            'module' => '',
        )
    ),
    */
);
