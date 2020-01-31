<?php 
/*
                 _                         _                   _     _ _ _ _         
                (_)                       (_)                 | |   (_) (_) |        
  _ __ ___  __ _ _  ___  _ __  ___   _ __  _ _ __   __ _  __ _| |__  _| |_| |_ _   _ 
 | '__/ _ \/ _` | |/ _ \| '_ \/ __| | '_ \| | '_ \ / _` |/ _` | '_ \| | | | __| | | |
 | | |  __/ (_| | | (_) | | | \__ \ | |_) | | | | | (_| | (_| | |_) | | | | |_| |_| |
 |_|  \___|\__, |_|\___/|_| |_|___/ | .__/|_|_| |_|\__, |\__,_|_.__/|_|_|_|\__|\__, |
            __/ |                   | |             __/ |                       __/ |
           |___/                    |_|            |___/                       |___/ 
           
V0.1 - Public release - github.com/tjorge-scw/regions-pingability/
Proudly made from Paris, at "La Maison Scaleway".
Any question? tomjorge@tomjorge.com
*/
?>
<!-- script ping open -->
<?php function ping($host, $port, $timeout)
{
  $tB = microtime(true);
  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout);
  if (!$fP) {
    return "down";
  }
  $tA = microtime(true);
  return round((($tA - $tB) * 1000), 0);
}
?>
<!-- script ping close -->
<!-- making variables with ping open -->
<?php
$reg1 = ping($reg1node, 80, 10);
$reg2 = ping($reg2node, 80, 10);
$reg3 = ping($reg3node, 80, 10);
?>
<!-- making variables with ping close -->
<!-- best location choice -->
<?php
  if ($reg2 > $reg1 && $reg3 > $reg1) {
  $bc = "$reg1sn - $reg1city, $reg1country";
} elseif ($reg1 > $reg2 && $reg3 > $reg2) {
  $bc = "$reg2sn - $reg2city, $reg2country";
} else ($reg1 > $reg3 && $reg2 > $reg3) {
  $bc = "$reg3sn - $reg3city, $reg3country"
}
?>
<!-- best location choice -->