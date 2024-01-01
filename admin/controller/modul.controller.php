
<?php 
    $tablo_Ad = "modul";
    $id_alan_isim = "modul_id";

    //Veri Listele
    $Veri = new Veri();
    $VeriGetir = $Veri->veriGetir("modul");


    //VeriIdGetir
    if(isset($_GET[$id_alan_isim]))
    {
        $tablo_id = $_GET["modul_id"];  
        $VeriId = new Veri();
        $veriIdGetir = $VeriId->veriIdGetir($tablo_Ad, $id_alan_isim, $tablo_id);
        
    }

    if(isset($_POST["submit"]))
        {
            if(isset($_GET['islem']) && $_GET['islem'] === 'mdlguncelle')
            {
                $modul = new Modul();
                $modulGuncelle = $modul->modulDuzenle();
            
                if($modulGuncelle){
                    echo "<script>window.location.href='modul.php?mdlguncelle=ok';</script>";
                    exit;
                }
                else{
                    echo "<script>window.location.href='modul.php?mdlguncelle=no';</script>";
                    exit;
                }
            }
        }
?>