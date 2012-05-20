<?php

/**
 * jQuery UI Plugin
 * 
 * @author mail[at]joachim-doerr[dot]com Joachim Doerr
 *
 * @package redaxo4
 * @version svn:$Id$
 */

$mypage = 'jquery_ui';

$REX['ADDON']['version'][$mypage]     = '1.2.5';
$REX['ADDON']['author'][$mypage]      = 'Joachim Doerr';
$REX['ADDON']['supportpage'][$mypage] = 'forum.redaxo.de';

$arrJQueryUi['path'] = '../files/addons/be_style/plugins/jquery_ui';
unset($arrJQueryUi['insert']);

$arrJQueryUi['insert'] = <<<EOD

<!-- jQuery UI start -->
<link type="text/css" href="{$arrJQueryUi['path']}/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
<script type="text/javascript" src="{$arrJQueryUi['path']}/jquery-ui-1.8.16.custom.min.js"></script>
<!-- jQuery UI end -->

EOD;

if ($REX['REDAXO'] === true) {
  rex_register_extension('PAGE_HEADER', create_function('$params', 'return $params[\'subject\'].\''. $arrJQueryUi['insert'] .'\';'));
}
