<?php

$tablo_Ad = "hakkimizda";
$id_alan_isim = "hakkimizda_id";



    //VeriIdGetir

        $tablo_id = 1;  
        $VeriId = new Veri();
        $veriIdGetir = $VeriId->veriIdGetir($tablo_Ad, $id_alan_isim, $tablo_id);
    

    if(isset($_POST["submit"]))
    {

        $hakkimizda = new Hakkimizda();
        $HakkimizdaGuncelle = $hakkimizda->hakkimizdaGuncelle();
                
        if($HakkimizdaGuncelle){
            echo "<script>window.location.href='hakkimizda.php?HakkimizdaGuncelle=ok';</script>";
            exit;
        }
        else{
            echo "<script>window.location.href='hakkimizda.php?HakkimizdaGuncelle=no';</script>";
            exit;
        }

    }

?>