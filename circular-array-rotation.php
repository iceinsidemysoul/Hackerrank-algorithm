<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$n,$k,$q);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');
$k%=$n;
$cd=$a;
for($i=0;$i<$n;$i++){
        $temp=($i+$n-$k)%$n;
        $a[$i]=(int)$cd[$temp];
}
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d",$m);
    echo $a[$m]."\n";
}

?>
