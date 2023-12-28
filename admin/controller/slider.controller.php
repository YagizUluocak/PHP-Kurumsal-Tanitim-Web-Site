<?php


    $tablo_Ad = "slider";
    $id_alan_isim = "slider_id";

    //Veri Listele
    $Veri = new Veri();
    $VeriGetir = $Veri->veriGetir("slider");

    //VeriIdGetir
    if(isset($_GET[$id_alan_isim]))
    {
        $tablo_id = $_GET["slider_id"];  
        $VeriId = new Veri();
        $veriIdGetir = $VeriId->veriIdGetir($tablo_Ad, $id_alan_isim, $tablo_id);
    }

    // EKLE / GÜNCELLE
    if(isset($_POST["submit"]))
    {
        //EKLE
        if(isset($_GET['islem']) && $_GET['islem'] === 'SliderEkle')
        {
            $slider = new Slider();
            $slider->sliderEkle();   
        }

        // Güncelle
        if(isset($_GET['islem']) && $_GET['islem'] === 'SliderGuncelle')
        {
            $Slider = new Slider();
            $SliderGuncelle = $Slider->sliderGuncelle();
        
            if($SliderGuncelle){
                echo "<script>window.location.href='slider.php?SliderGuncelle=ok';</script>";
                exit;
            }
            else{
                echo "<script>window.location.href='slider.php?SliderGuncelle=no';</script>";
                exit;
            }
        }

    }

    // VERİ SİL
    if(isset($_GET['islem']) && $_GET['islem'] === 'sliderSil')
    {
        $tablo_id = $_GET[$id_alan_isim];
        $VeriSil = $Veri->veriSil($tablo_Ad, $id_alan_isim, $tablo_id);

        if($VeriSil) {
            echo "<script>window.location.href='slider.php?sliderSil=ok';</script>";
            exit;
        } else {
            echo "<script>window.location.href='slider.php?sliderSil=no';</script>";
            exit;
        }
    }

?>