<?php 
    $tablo_Ad = "ayar";
    $id_alan_isim = "ayar_id";


    $tablo_id = 1;  
    $VeriId = new Veri();
    $veriIdGetir = $VeriId->veriIdGetir($tablo_Ad, $id_alan_isim, $tablo_id);

    
    if(isset($_POST["submit"]))
    {
        $ayar = new Ayar();
        $genelayarGuncelle = $ayar->genelAyarGuncelle();   
        
        if($genelayarGuncelle){
            echo "<script>window.location.href='ayar-genel.php';</script>";
            exit;
        }
    }

    if(isset($_POST["guncelle"]))
    {
        $ayar = new Ayar();
        $sosyalGuncelle = $ayar->sosyalAyarGuncelle();   
        
        if($sosyalGuncelle){
            echo "<script>window.location.href='ayar-sosyal.php';</script>";
            exit;
        }
    }
    

?>