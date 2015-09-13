<?php
$isik=array(
    'eesnimi'=>'Aksel',
    'perenimi'=>'Jänes',
    'vanus'=>20);
$eesnimi_algab_vokaaliga=true;
echo $isik['eesnimi']." ".$isik['perenimi']."(".$isik['vanus'].")<br>";

if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";
}
?>
