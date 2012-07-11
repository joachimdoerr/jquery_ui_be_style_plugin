<?php
/*
config.inc.php

@copyright Copyright (c) 2012 by Doerr Softwaredevelopment
@author mail[at]joachim-doerr[dot]com Joachim Doerr

@package redaxo4
@version 1.2.7
*/

// ADDON IDENTIFIER AUS ORDNERNAMEN ABLEITEN
////////////////////////////////////////////////////////////////////////////////
$strPluginName = 'jquery_ui';
$strPluginPath = $REX['INCLUDE_PATH'].'/addons/be_style/plugins/'.$strPluginName.'/';


// ADDON REX COMMONS
////////////////////////////////////////////////////////////////////////////////
$REX['ADDON']['version'][$strPluginName]     = '1.2.7';
$REX['ADDON']['author'][$strPluginName]      = 'Joachim Doerr';
$REX['ADDON']['supportpage'][$strPluginName] = 'forum.redaxo.de';


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
    'path'    => '../files/addons/be_style/plugins/'.$strPluginName.'/'
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
