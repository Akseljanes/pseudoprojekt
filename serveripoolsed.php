<?php

$isik=(object) array('eesnimi'=>'Aksel', 'perenimi'=>'Jänes','vanus'=>20,'sugu'=>'Mees');

$eesnimi_algab_vokaaliga=strstr("AEIOUÕÄÜ",$isik->{'eesnimi'}[0]);
$arv1=1.23;
$arv2=2.34;
$summa=$arv1+$arv2;

echo $isik->{'eesnimi'}." ".$isik->{'perenimi'}." (".$isik->{'vanus'}.") ".$isik->{'sugu'}."<br>";
echo "Arvude ".$arv1." ja ".$arv2." summa on ".$summa."<br>";
if(isset($_GET['koer'])){
    echo $_GET['koer']."<br>";
};

if(isset($_POST['kass'])){
    echo 'Kass on: '.$_POST['kass'].'<br>';
}
if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";}
?>
<form action="?" method="post">
    <input name="kass" placeholder="Kassitõug">
    <input type="submit">
</form>
