<?php

    $tablo_Ad = "takim";
    $id_alan_isim = "takim_id";

    //Veri Listele
    $Veri = new Veri();
    $VeriGetir = $Veri->veriGetir("takim");

    //VeriIdGetir
    if(isset($_GET[$id_alan_isim]))
    {
        $tablo_id = $_GET["takim_id"];  
        $VeriId = new Veri();
        $veriIdGetir = $VeriId->veriIdGetir($tablo_Ad, $id_alan_isim, $tablo_id);
    }

    // EKLE / GÜNCELLE
    if(isset($_POST["submit"]))
    {
        //EKLE
        if(isset($_GET['islem']) && $_GET['islem'] === 'takimekle')
        {
            $takim = new Takim();
            $takim->takimEkle();   
        }

        // Güncelle
        if(isset($_GET['islem']) && $_GET['islem'] === 'takimguncelle')
        {
            $takim = new Takim();
            $takimGuncelle =  $takim->takimGuncelle();
        
            if($takimGuncelle ){
                echo "<script>window.location.href='takim.php?takimguncelle=ok';</script>";
                exit;
            }
            else{
                echo "<script>window.location.href='takim.php?takimguncelle=no';</script>";
                exit;
            }
        }

    }

    // VERİ SİL
    if(isset($_GET['islem']) && $_GET['islem'] === 'takimsil')
    {
        $tablo_id = $_GET[$id_alan_isim];
        $VeriSil = $Veri->veriSil($tablo_Ad, $id_alan_isim, $tablo_id);

        if($VeriSil) {
            echo "<script>window.location.href='takim.php?takimsil=ok';</script>";
            exit;
        } else {
            echo "<script>window.location.href='takim.php?takimsil=no';</script>";
            exit;
        }
    }

?>