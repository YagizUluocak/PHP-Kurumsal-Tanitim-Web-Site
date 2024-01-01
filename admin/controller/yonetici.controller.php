
<?php 
    $tablo_Ad = "yonetici";
    $id_alan_isim = "yonetici_id";

    //Veri Listele
    $Veri = new Veri();
    $VeriGetir = $Veri->veriGetir("yonetici");


    //VeriIdGetir
    if(isset($_GET[$id_alan_isim]))
    {
        $tablo_id = $_GET["yonetici_id"];  
        $VeriId = new Veri();
        $veriIdGetir = $VeriId->veriIdGetir($tablo_Ad, $id_alan_isim, $tablo_id);
    }

     // VERİ SİL
     if(isset($_GET['islem']) && $_GET['islem'] === 'yoneticiSil')
     {
        $tablo_id = $_GET[$id_alan_isim];
        $VeriSil = $Veri->veriSil($tablo_Ad, $id_alan_isim, $tablo_id);
 
        if($VeriSil)
        {
            echo "<script>window.location.href='yonetici.php?yoneticiSil=ok';</script>";
            exit;
        }
        else 
        {
            echo "<script>window.location.href='yonetici.php?yoneticiSil=no';</script>";
            exit;
        }
     }


    // EKLE / GÜNCELLE
    if(isset($_POST["submit"]))
    {
        //EKLE
        if(isset($_GET['islem']) && $_GET['islem'] === 'yoneticiEkle')
        {
            $yonetici = new Yonetici();
            $yonetici->yoneticiEkle();   
        }

        // Güncelle
        if(isset($_GET['islem']) && $_GET['islem'] === 'yoneticiGuncelle')
        {
            $yonetici = new Yonetici();
            $yoneticiGuncelle = $yonetici->yoneticiDuzenle();   
        
            if($yoneticiGuncelle){
                echo "<script>window.location.href='yonetici.php?yoneticiGuncelle=ok';</script>";
                exit;
            }
            else{
                echo "<script>window.location.href='yonetici.php?yoneticiGuncelle=no';</script>";
                exit;
            }
        }
    }


    
?>