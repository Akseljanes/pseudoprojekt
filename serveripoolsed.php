<?php
$isik = (object) array("Eesnimi" => "Aksel", "Perekonnanimi" => "Jänes", "Vanus" => "20");
$eesnimi_algab_vokaaliga= true;

echo $isik->{"Eesnimi"}." ".$isik->{"Perekonnanimi"}." "."(" .$isik->{"Vanus"}. ")"."<br>";

if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";
}
?>