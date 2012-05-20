<?php

/**
 * jQuery UI Plugin
 * 
 * @author mail[at]joachim-doerr[dot]com Joachim Doerr
 *
 * @package redaxo4
 * @version svn:$Id$
 */
 
?>
 
<h2 style="margin-bottom:10px;">jQuery UI "be_style" Plugin für Redaxo | 2011.12.06 | Ver. 1.2.5</h2>
<h3 style="margin:10px 0 0 0">Systemvoraussetzungen</h3>
<p>jQuery UI ist ein Plugin für das &quot;be_style&quot; Addon und kann eingesetzt werden ab Redaxo 4.2 </p>
<h3 style="margin:10px 0 0 0">Installation</h3>
<p>Die installation von jQuery UI ist recht einfach:</p>
<ol style="margin-left:20px;">
<li>Entpacken Sie das Packet und legen Sie dessen Inhalt im Pluginverzeichnis &quot;redaxo/include/addons/be_style/plugins/&quot; des &quot;be_style&quot; Addons ab.</li>
<li>Installieren und aktivieren Sie das Plugin in Redaxo unter &quot;Addons&quot;. Das Plugin ist in der Addon-Liste als Plugin des &quot;be_style&quot; Addons zu finden.</li>
</ol>
<h3 style="margin:10px 0 0 0">Mögliche Fehler und deren Lösung</h3>
<p>Die bis jetzt bekannten Fehler:</p>
<ol style="margin-left:20px;">
<li>Die Installation ist nicht möglich wegen fehlende Schreib- oder Ausführrechte der Ordner
<ul style="margin-left:20px;">
<li>&quot;redaxo/include/addons/be_style/plugins/jquery_ui&quot;</li>
<li>&quot;files/addons/be_style/plugins&quot;</li>
</ul>
</li>
</ol>
<p>Die Lösung ist jeweils die selbe, prüfen Sie die Berechtigungen der Ordner und erteilen Sie je nach Servereinstellung Rechte von 755 bis 777.</p>
<h3 style="margin:10px 0 0 0">Was macht das jQuery UI Plugin</h3>
<p>Plugin stellt die jQuery UI (User Interface) für Redaxo bereit. Es legt alles nötigen Dateien dafür in dem Ordner &quot;files/addons/be_style/plugins/jquery_ui&quot; ab.</p>

<?php

if ($REX['ADDON']['plugins']['be_style']['status']['jquery_ui'] == true) {

  echo '<h3 style="margin:30px 0 0 0">jQuery UI Demos</h3>';
  include('pages/jquery-ui-demo-modul.php');
  
}
