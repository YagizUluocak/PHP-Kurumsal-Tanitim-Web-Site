<?php

    $tablo_Ad = "servis";
    $id_alan_isim = "servis_id";

    //Veri Listele
    $Veri = new Veri();
    $VeriGetir = $Veri->veriGetir("servis");

    //VeriIdGetir
    if(isset($_GET[$id_alan_isim]))
    {
        $tablo_id = $_GET["servis_id"];  
        $VeriId = new Veri();
        $veriIdGetir = $VeriId->veriIdGetir($tablo_Ad, $id_alan_isim, $tablo_id);
    }

     // VERİ SİL
     if(isset($_GET['islem']) && $_GET['islem'] === 'ServisSil')
     {
        $tablo_id = $_GET[$id_alan_isim];
        $VeriSil = $Veri->veriSil($tablo_Ad, $id_alan_isim, $tablo_id);
 
        if($VeriSil)
        {
            echo "<script>window.location.href='servis.php?ServisSil=ok';</script>";
            exit;
        }
        else 
        {
            echo "<script>window.location.href='servis.php?ServisSil=no';</script>";
            exit;
        }
     }


    // EKLE / GÜNCELLE
    if(isset($_POST["submit"]))
    {
        //EKLE
        if(isset($_GET['islem']) && $_GET['islem'] === 'ServisEkle')
        {
            $servis = new Servis();
            $servis->servisEkle();   
        }

        // Güncelle
        if(isset($_GET['islem']) && $_GET['islem'] === 'ServisGuncelle')
        {
            $servis = new Servis();
            $ServisGuncelle = $servis->servisGuncelle();
        
            if($ServisGuncelle){
                echo "<script>window.location.href='servis.php?ServisGuncelle=ok';</script>";
                exit;
            }
            else{
                echo "<script>window.location.href='servis.php?ServisGuncelle=no';</script>";
                exit;
            }
        }
    }


?>