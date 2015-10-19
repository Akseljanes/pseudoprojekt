<?php
/**
 * Created by PhpStorm.
 * User: Aksel
 * Date: 19/10/15
 * Time: 09:06
 */
    $filename="data.csv";
    if(file_exists($filename)){
            $file=fopen($filename,"r");
            $andmed=[];
            while(($row=fgetcsv($file))!==false){
                    $andmed[]=explode(";",$row[0]);
            }
        $json=json_encode($andmed, JSON_FORCE_OBJECT);
        echo $json;
        fclose($file);
    }
    else {
        echo "Error no file. Gonna make new data.csv file!";
        $file=fopen($filename,"w");
        file_put_contents($filename,"Aksel;lala;aksel.lala@gmail.com\nReijo;Meks;Reijo.Meks@gmail.com\n");
        fclose($file);
    }
?>