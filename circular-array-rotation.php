<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$n,$k,$q);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');
$k=$k%$n;
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d",$m);
}

?>
