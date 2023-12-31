
<?php 
    $tablo_Ad = "nedenbiz";
    $id_alan_isim = "ndn_id";

    //Veri Listele
    $Veri = new Veri();
    $VeriGetir = $Veri->veriGetir("nedenbiz");


    //VeriIdGetir
    if(isset($_GET[$id_alan_isim]))
    {
        $tablo_id = $_GET["ndn_id"];  
        $VeriId = new Veri();
        $veriIdGetir = $VeriId->veriIdGetir($tablo_Ad, $id_alan_isim, $tablo_id);
    }

     // VERİ SİL
     if(isset($_GET['islem']) && $_GET['islem'] === 'ndnSil')
     {
        $tablo_id = $_GET[$id_alan_isim];
        $VeriSil = $Veri->veriSil($tablo_Ad, $id_alan_isim, $tablo_id);
 
        if($VeriSil)
        {
            echo "<script>window.location.href='nedenbiz.php?ndnSil=ok';</script>";
            exit;
        }
        else 
        {
            echo "<script>window.location.href='nedenbiz.php?ndnSil=no';</script>";
            exit;
        }
     }


    // EKLE / GÜNCELLE
    if(isset($_POST["submit"]))
    {
        //EKLE
        if(isset($_GET['islem']) && $_GET['islem'] === 'ndnEkle')
        {
            $nedenbiz = new NedenBiz();
            $nedenbiz->nedenBizEkle();   
        }

        // Güncelle
        if(isset($_GET['islem']) && $_GET['islem'] === 'ndnGuncelle')
        {
            $nedenbiz = new NedenBiz();
            $nedenbizGuncelle = $nedenbiz->nedenBizGuncelle();   
        
            if($nedenbizGuncelle){
                echo "<script>window.location.href='nedenbiz.php?ndnGuncelle=ok';</script>";
                exit;
            }
            else{
                echo "<script>window.location.href='nedenbiz.php?ndnGuncelle=no';</script>";
                exit;
            }
        }
    }


    
?>