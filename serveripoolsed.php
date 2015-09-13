<?php

$isik=(object) array('eesnimi'=>'Aksel', 'perenimi'=>'Jänes','vanus'=>20,'sugu'=>'Mees');

$eesnimi_algab_vokaaliga=strstr("AEIOUÕÄÜ",$isik->{'eesnimi'}[0]);
echo $isik->{'eesnimi'}." ".$isik->{'perenimi'}." (".$isik->{'vanus'}.") ".$isik->{'sugu'}."<br>";

if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";
}
?>
