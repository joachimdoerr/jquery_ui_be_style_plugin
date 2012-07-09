<?php
/*
jQuery UI Plugin config.inc.php

@author mail[at]joachim-doerr[dot]com Joachim Doerr
@author <a href="http://joachim-doerr.com">joachim-doerr.com</a>

@package redaxo4
@version 1.2.6
*/

// ADDON IDENTIFIER AUS ORDNERNAMEN ABLEITEN
////////////////////////////////////////////////////////////////////////////////
$mypage = 'jquery_ui';
$myroot = $REX['INCLUDE_PATH'].'/addons/be_style/plugins/'.$mypage.'/';


// ADDON REX COMMONS
////////////////////////////////////////////////////////////////////////////////
$REX['ADDON']['version'][$mypage]     = '1.2.6';
$REX['ADDON']['author'][$mypage]      = 'Joachim Doerr';
$REX['ADDON']['supportpage'][$mypage] = 'forum.redaxo.de';


// REDAXO BACKEND
////////////////////////////////////////////////////////////////////////////////
if ($REX['REDAXO'] === true)
{
  // LOAD I18N FILE
  ////////////////////////////////////////////////////////////////////////////////
  $I18N->appendFile(dirname(__FILE__) . '/lang/');

  // JQUERY UI DATA
  ////////////////////////////////////////////////////////////////////////////////
  $arrJQueryUi = array(
    'version' => '1.8.21',
    'path'    => '../files/addons/be_style/plugins/'.$mypage.'/'
  );
  
  
  // JQUERY UI INSERT
  ////////////////////////////////////////////////////////////////////////////////
  unset($arrJQueryUi['insert']);
  $arrJQueryUi['insert'] = <<<EOT

<!-- jQuery UI start -->
  <link type="text/css" href="{$arrJQueryUi['path']}/ui-lightness/jquery-ui-{$arrJQueryUi['version']}.custom.css" rel="stylesheet" />
  <script type="text/javascript" src="{$arrJQueryUi['path']}/jquery-ui-{$arrJQueryUi['version']}.custom.min.js"></script>
<!-- jQuery UI end -->

EOT;
  
  
  // REGISTER EXTENSION POINT
  ////////////////////////////////////////////////////////////////////////////////
  rex_register_extension('PAGE_HEADER', create_function('$params', 'return $params[\'subject\'].\''. $arrJQueryUi['insert'] .'\';'));
}
