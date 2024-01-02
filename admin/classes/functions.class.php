<?php

class Veri extends Db
{
    private $tablo_ad;
    private $tablolar = ['slider','servis','hakkimizda', 'nedenbiz', 'takim', 'ayar', 'yonetici', 'modul'];

    private $id_alan_isim;
    private $tablo_id;

    public function veriGetir($tablo_Ad)
    {
        if(in_array($tablo_Ad, $this->tablolar)){
            $this->tablo_ad = $tablo_Ad; // Tablo adını set et
            $query = "SELECT * FROM ".$this->tablo_ad;
            
            $stmt = $this->connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        else{
            echo "Girdiğiniz Tablo Adı Mevcut değildur.";
        }
    }
    public function veriIdGetir($tablo_Ad, $id_alan_isim, $tablo_id)
    {
        $this->tablo_ad = $tablo_Ad;
        $this->id_alan_isim = $id_alan_isim;
        $this->tablo_id = $tablo_id;


        $query = "SELECT * FROM ".$this->tablo_ad." WHERE ".$this->id_alan_isim." = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$this->tablo_id]);
        return $stmt->fetch();
    }
    public function veriSil($tablo_Ad, $id_alan_isim, $tablo_id)
    {
        $this->tablo_ad = $tablo_Ad;
        $this->id_alan_isim = $id_alan_isim;
        $this->tablo_id = $_GET[$id_alan_isim];

        $query = "DELETE FROM ".$this->tablo_ad." WHERE ".$this->id_alan_isim ." = ?";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([$this->tablo_id]);
    }
}

class Slider extends Db
{
    private $slider_id;
    private $slider_baslik;
    private $slider_aciklama;
    private $slider_resim;
    private $slider_durum;

    public function sliderEkle()
    {
        $this->slider_baslik = htmlspecialchars($_POST['slider_baslik'], ENT_QUOTES);
        $this->slider_aciklama = htmlspecialchars($_POST['slider_aciklama'], ENT_QUOTES);
        $this->slider_resim = $_FILES["slider_resim"];
        $this->slider_durum = htmlspecialchars($_POST['slider_durum'], ENT_QUOTES);

        $dest_path = "../../images/slider/";
        $this->slider_resim = $_FILES["slider_resim"]["name"];
        $fileSourcePath = $_FILES["slider_resim"]["tmp_name"];
        $fileDestPath = $dest_path . $this->slider_resim;
        move_uploaded_file($fileSourcePath, $fileDestPath);

        $query = "INSERT INTO slider(slider_baslik, slider_aciklama, slider_resim, slider_durum) VALUES (:slider_baslik, :slider_aciklama, :slider_resim, :slider_durum)";
        $stmt = $this->connect()->prepare($query);
        
        $stmt->bindParam(':slider_baslik', $this->slider_baslik);
        $stmt->bindParam(':slider_aciklama', $this->slider_aciklama);
        $stmt->bindParam(':slider_resim', $this->slider_resim);
        $stmt->bindParam(':slider_durum', $this->slider_durum);      
        return $stmt->execute();
    }

    public function sliderGuncelle()
    {
        $this->slider_id = $_GET["slider_id"];
        $this->slider_baslik = htmlspecialchars($_POST['slider_baslik'], ENT_QUOTES);
        $this->slider_aciklama = htmlspecialchars($_POST['slider_aciklama'], ENT_QUOTES);
        $this->slider_resim = $_FILES["slider_resim"];
        $this->slider_durum = htmlspecialchars($_POST['slider_durum'], ENT_QUOTES);


        $resimadi = null;

        if(isset($_FILES['slider_resim'])&& $_FILES['slider_resim']['error'] === UPLOAD_ERR_OK){

            $resimadi = $_FILES['slider_resim']['name'];
            $hedefKlasor = '../../images/slider/';
            $hedefDosya = $hedefKlasor.$resimadi;

            if(move_uploaded_file($_FILES['slider_resim']['tmp_name'], $hedefDosya)){
                $resimadi = $resimadi;
            }else{
                echo "Resim Yükleme İşlemi Başarısız Oldu!";
            }
        }

        $query = "UPDATE slider SET slider_baslik=:slider_baslik, slider_aciklama=:slider_aciklama";

        if($resimadi){
            $query .=", slider_resim=:slider_resim";
        }
        $query .= ", slider_durum=:slider_durum WHERE slider_id=:slider_id";
        $stmt =$this->connect()->prepare($query);

        $params = [
            'slider_id'=> $this->slider_id,
            'slider_baslik' => $this->slider_baslik,
            'slider_aciklama' => $this->slider_aciklama,
            'slider_durum' => $this->slider_durum
        ];

        if($resimadi){
            $params['slider_resim'] = $resimadi;
        }

        return $stmt->execute($params); 
    }
}
class Servis extends Db
{
    private $servis_id;
    private $servis_ad;
    private $servis_aciklama;
    private $servis_durum;
    private $servis_resim;


    public function servisEkle()
    {
        $this->servis_ad = htmlspecialchars($_POST['servis_ad'], ENT_QUOTES);
        $this->servis_aciklama = htmlspecialchars($_POST['servis_aciklama'], ENT_QUOTES);
        $this->servis_resim = $_FILES["servis_resim"];
        $this->servis_durum = htmlspecialchars($_POST['servis_durum'], ENT_QUOTES);

        $dest_path = "../../images/servis/";
        $this->servis_resim = $_FILES["servis_resim"]["name"];
        $fileSourcePath = $_FILES["servis_resim"]["tmp_name"];
        $fileDestPath = $dest_path . $this->servis_resim;
        move_uploaded_file($fileSourcePath, $fileDestPath);

        $query = "INSERT INTO servis(servis_ad, servis_aciklama, servis_durum, servis_resim) VALUES (:servis_ad, :servis_aciklama, :servis_durum, :servis_resim)";
        $stmt = $this->connect()->prepare($query);

        $stmt->bindParam(':servis_ad', $this->servis_ad);
        $stmt->bindParam(':servis_aciklama', $this->servis_aciklama);
        $stmt->bindParam(':servis_durum', $this->servis_durum);
        $stmt->bindParam(':servis_resim', $this->servis_resim);

        return $stmt->execute();
    }

    public function servisGuncelle()
    {
        $this->servis_id = $_GET['servis_id'];
        $this->servis_ad = htmlspecialchars($_POST['servis_ad'], ENT_QUOTES);
        $this->servis_aciklama = htmlspecialchars($_POST['servis_aciklama'], ENT_QUOTES);
        $this->servis_durum = htmlspecialchars($_POST['servis_durum'], ENT_QUOTES);
        $this->servis_resim = $_FILES["servis_resim"];

        $resimadi = null;
        if(isset($_FILES['servis_resim'])&& $_FILES['servis_resim']['error'] === UPLOAD_ERR_OK){

            $resimadi = $_FILES['servis_resim']['name'];
            $hedefKlasor = '../../images/servis/';
            $hedefDosya = $hedefKlasor.$resimadi;

            if(move_uploaded_file($_FILES['servis_resim']['tmp_name'], $hedefDosya)){
                $resimadi = $resimadi;
            }else{
                echo "Resim Yükleme İşlemi Başarısız Oldu!";
            }
        }

        $query = "UPDATE servis SET servis_ad=:servis_ad, servis_aciklama=:servis_aciklama, servis_durum=:servis_durum";

        if($resimadi){
            $query .=", servis_resim=:servis_resim";
        }
        $query .= " WHERE servis_id=:servis_id";
        $stmt =$this->connect()->prepare($query);
        $params = [
            'servis_id'=> $this->servis_id,
            'servis_ad' => $this->servis_ad,
            'servis_aciklama' => $this->servis_aciklama,
            'servis_durum' => $this->servis_durum
        ];

        if($resimadi){
            $params['servis_resim'] = $resimadi;
        }
        return $stmt->execute($params); 
    }
    public function servisModul()
    {
        $query = "SELECT * FROM sayfa_modul AS sm INNER JOIN modul AS m ON sm.modul_id = m.modul_id INNER JOIN sayfalar AS s ON sm.sayfa_id = s.sayfa_id WHERE m.modul_durum = 1 AND s.sayfa_adi = 'servis'";

        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
}
class Hakkimizda extends Db
{
    private $hakkimizda_id; 
    private $hakkimizda_baslik;
    private $hakkimizda_icerik;
    private $hakkimizda_resim;


    public function hakkimizdaGuncelle()
    {

        $this->hakkimizda_id = 1;
        $this->hakkimizda_baslik = htmlspecialchars($_POST['hakkimizda_baslik'], ENT_QUOTES);
        $this->hakkimizda_icerik = htmlspecialchars($_POST['hakkimizda_icerik'], ENT_QUOTES);
        $this->hakkimizda_resim  = $_FILES["hakkimizda_resim"];

        $resimadi = null;
        if(isset($_FILES['hakkimizda_resim'])&& $_FILES['hakkimizda_resim']['error'] === UPLOAD_ERR_OK){

            $resimadi = $_FILES['hakkimizda_resim']['name'];
            $hedefKlasor = '../../images/hakkimizda/';
            $hedefDosya = $hedefKlasor.$resimadi;

            if(move_uploaded_file($_FILES['hakkimizda_resim']['tmp_name'], $hedefDosya)){
                $resimadi = $resimadi;
            }else{
                echo "Resim Yükleme İşlemi Başarısız Oldu!";
            }
        }

        $query = "UPDATE hakkimizda SET hakkimizda_baslik=:hakkimizda_baslik, hakkimizda_icerik=:hakkimizda_icerik";

        if($resimadi){
            $query .=", hakkimizda_resim=:hakkimizda_resim";
        }
        $query .= " WHERE hakkimizda_id=:hakkimizda_id";
        $stmt =$this->connect()->prepare($query);
        $params = [
            'hakkimizda_id'=> $this->hakkimizda_id,
            'hakkimizda_baslik' => $this->hakkimizda_baslik,
            'hakkimizda_icerik' => $this->hakkimizda_icerik
        ];

        if($resimadi){
            $params['hakkimizda_resim'] = $resimadi;
        }
        return $stmt->execute($params); 
    }
    public function hakkimizdaModul()
    {
        $query = "SELECT * FROM sayfa_modul AS sm INNER JOIN modul AS m ON sm.modul_id = m.modul_id INNER JOIN sayfalar AS s ON sm.sayfa_id = s.sayfa_id WHERE m.modul_durum = 1 AND s.sayfa_adi = 'hakkimizda'";

        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
}
class NedenBiz extends Db
{
    private $ndn_id;
    private $ndn_baslik;
    private $ndn_icerik;
    private $ndn_durum;
    private $ndn_resim;

    public function nedenBizEkle()
    {
        $this->ndn_baslik = htmlspecialchars($_POST["ndn_baslik"], ENT_QUOTES);
        $this->ndn_icerik = htmlspecialchars($_POST["ndn_icerik"], ENT_QUOTES);
        $this->ndn_durum = htmlspecialchars($_POST["ndn_durum"], ENT_QUOTES);
        $this->ndn_resim = $_FILES["ndn_resim"];

        $dest_path = "../../images/nedenbiz/";
        $this->ndn_resim = $_FILES["ndn_resim"]["name"];
        $fileSourcePath = $_FILES["ndn_resim"]["tmp_name"];
        $fileDestPath = $dest_path . $this->ndn_resim;
        move_uploaded_file($fileSourcePath, $fileDestPath);

        $query = "INSERT INTO nedenbiz(ndn_baslik, ndn_icerik, ndn_durum, ndn_resim) VALUES (:ndn_baslik, :ndn_icerik, :ndn_durum, :ndn_resim)";
        $stmt = $this->connect()->prepare($query);

        $stmt->bindParam(':ndn_baslik', $this->ndn_baslik);
        $stmt->bindParam(':ndn_icerik', $this->ndn_icerik);
        $stmt->bindParam(':ndn_durum', $this->ndn_durum);
        $stmt->bindParam(':ndn_resim', $this->ndn_resim);      
        return $stmt->execute();
    }
    public function nedenBizGuncelle()
    {
        $this->ndn_id = $_GET["ndn_id"];
        $this->ndn_baslik = htmlspecialchars($_POST["ndn_baslik"], ENT_QUOTES);
        $this->ndn_icerik = htmlspecialchars($_POST["ndn_icerik"], ENT_QUOTES);
        $this->ndn_durum = htmlspecialchars($_POST["ndn_durum"], ENT_QUOTES);
        $this->ndn_resim = $_FILES["ndn_resim"];

        $resimadi = null;

        if(isset($_FILES['ndn_resim'])&& $_FILES['ndn_resim']['error'] === UPLOAD_ERR_OK){

            $resimadi = $_FILES['ndn_resim']['name'];
            $hedefKlasor = '../../images/nedenbiz/';
            $hedefDosya = $hedefKlasor.$resimadi;

            if(move_uploaded_file($_FILES['ndn_resim']['tmp_name'], $hedefDosya)){
                $resimadi = $resimadi;
            }else{
                echo "Resim Yükleme İşlemi Başarısız Oldu!";
            }
        }

        $query = "UPDATE nedenbiz SET ndn_baslik=:ndn_baslik, ndn_icerik=:ndn_icerik, ndn_durum=:ndn_durum";

        if($resimadi){
            $query .=", ndn_resim=:ndn_resim";
        }
        $query .= " WHERE ndn_id=:ndn_id";
        $stmt =$this->connect()->prepare($query);

        $params = [
            'ndn_id'=> $this->ndn_id,
            'ndn_baslik' => $this->ndn_baslik,
            'ndn_icerik' => $this->ndn_icerik,
            'ndn_durum' => $this->ndn_durum
        ];

        if($resimadi){
            $params['ndn_resim'] = $resimadi;
        }

        return $stmt->execute($params); 
    }
    public function nedenbizModul()
    {
        $query = "SELECT * FROM sayfa_modul AS sm INNER JOIN modul AS m ON sm.modul_id = m.modul_id INNER JOIN sayfalar AS s ON sm.sayfa_id = s.sayfa_id WHERE m.modul_durum = 1 AND s.sayfa_adi = 'nedenbiz'";

        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
}
class Takim extends Db
{
    private $takim_id;
    private $takim_isim;
    private $takim_gorev;
    private $takim_durum;
    private $takim_twitter;
    private $takim_instagram;
    private $takim_linkedin;
    private $takim_resim;

    public function takimEkle()
    {
        $this->takim_isim = htmlspecialchars($_POST["takim_isim"], ENT_QUOTES);
        $this->takim_gorev = htmlspecialchars($_POST["takim_gorev"], ENT_QUOTES);
        $this->takim_durum = htmlspecialchars($_POST["takim_durum"], ENT_QUOTES);
        $this->takim_twitter = htmlspecialchars($_POST["takim_twitter"], ENT_QUOTES);
        $this->takim_instagram = htmlspecialchars($_POST["takim_instagram"], ENT_QUOTES);
        $this->takim_linkedin = htmlspecialchars($_POST["takim_linkedin"], ENT_QUOTES);
        $this->takim_resim  = $_FILES["takim_resim"];

        $dest_path = "../../images/takim/";
        $this->takim_resim = $_FILES["takim_resim"]["name"];
        $fileSourcePath = $_FILES["takim_resim"]["tmp_name"];
        $fileDestPath = $dest_path . $this->takim_resim;
        move_uploaded_file($fileSourcePath, $fileDestPath);

        $query = "INSERT INTO takim(takim_isim, takim_gorev, takim_durum, takim_twitter, takim_instagram, takim_linkedin, takim_resim) VALUES (:takim_isim, :takim_gorev, :takim_durum, :takim_twitter, :takim_instagram, :takim_linkedin, :takim_resim)";
        $stmt = $this->connect()->prepare($query);

        $stmt->bindParam(':takim_isim', $this->takim_isim);
        $stmt->bindParam(':takim_gorev', $this->takim_gorev);
        $stmt->bindParam(':takim_durum', $this->takim_durum);
        $stmt->bindParam(':takim_twitter', $this->takim_twitter);
        $stmt->bindParam(':takim_instagram', $this->takim_instagram);
        $stmt->bindParam(':takim_linkedin', $this->takim_linkedin);
        $stmt->bindParam(':takim_resim', $this->takim_resim);

        return $stmt->execute();


    }
    public function takimGuncelle()
    {
        $this->takim_id = $_GET["takim_id"];
        $this->takim_isim = htmlspecialchars($_POST["takim_isim"], ENT_QUOTES);
        $this->takim_gorev = htmlspecialchars($_POST["takim_gorev"], ENT_QUOTES);
        $this->takim_durum = htmlspecialchars($_POST["takim_durum"], ENT_QUOTES);
        $this->takim_twitter = htmlspecialchars($_POST["takim_twitter"], ENT_QUOTES);
        $this->takim_instagram = htmlspecialchars($_POST["takim_instagram"], ENT_QUOTES);
        $this->takim_linkedin = htmlspecialchars($_POST["takim_linkedin"], ENT_QUOTES);
        $this->takim_resim  = $_FILES["takim_resim"];

        $resimadi = null;

        if(isset($_FILES['takim_resim'])&& $_FILES['takim_resim']['error'] === UPLOAD_ERR_OK){

            $resimadi = $_FILES['takim_resim']['name'];
            $hedefKlasor = '../../images/takim/';
            $hedefDosya = $hedefKlasor.$resimadi;

            if(move_uploaded_file($_FILES['takim_resim']['tmp_name'], $hedefDosya)){
                $resimadi = $resimadi;
            }else{
                echo "Resim Yükleme İşlemi Başarısız Oldu!";
            }
        }

        $query = "UPDATE takim SET takim_isim=:takim_isim, takim_gorev=:takim_gorev, takim_durum=:takim_durum, takim_twitter=:takim_twitter, takim_instagram=:takim_instagram, takim_linkedin=:takim_linkedin";

        if($resimadi){
            $query .=", takim_resim=:takim_resim";
        }
        $query .= " WHERE takim_id=:takim_id";
        $stmt =$this->connect()->prepare($query);

        $params = [
            'takim_id'=> $this->takim_id,
            'takim_isim' => $this->takim_isim,
            'takim_gorev' => $this->takim_gorev,
            'takim_durum' => $this->takim_durum,
            'takim_twitter' => $this->takim_twitter,
            'takim_instagram' => $this->takim_instagram,
            'takim_linkedin' => $this->takim_linkedin
        ];

        if($resimadi){
            $params['takim_resim'] = $resimadi;
        }

        return $stmt->execute($params); 
    }
    public function takimModul()
    {
        $query = "SELECT * FROM sayfa_modul AS sm INNER JOIN modul AS m ON sm.modul_id = m.modul_id INNER JOIN sayfalar AS s ON sm.sayfa_id = s.sayfa_id WHERE m.modul_durum = 1 AND s.sayfa_adi = 'takim'";

        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
}
class Ayar extends Db
{
    private $ayar_id = 1;
    private $ayar_logo;
    private $ayar_favicon;
    private $ayar_telefon;
    private $ayar_mail;
    private $ayar_adres;
    private $ayar_description;
    private $ayar_keywords;
    private $ayar_copyright;

    private $ayar_facebook;
    private $ayar_twitter;
    private $ayar_instagram;

    public function genelAyarGuncelle()
    {
        
        $this->ayar_logo = $_FILES["ayar_logo"];
        $this->ayar_favicon = $_FILES["ayar_favicon"];
        $this->ayar_telefon = htmlspecialchars($_POST["ayar_telefon"], ENT_QUOTES);
        $this->ayar_mail = htmlspecialchars($_POST["ayar_mail"], ENT_QUOTES);
        $this->ayar_adres = htmlspecialchars($_POST["ayar_adres"], ENT_QUOTES);
        $this->ayar_description = htmlspecialchars($_POST["ayar_description"], ENT_QUOTES);
        $this->ayar_keywords = htmlspecialchars($_POST["ayar_keywords"], ENT_QUOTES);
        $this->ayar_copyright = htmlspecialchars($_POST["ayar_copyright"], ENT_QUOTES);

        $logo = null;
        
        if(isset($_FILES['ayar_logo'])&& $_FILES['ayar_logo']['error'] === UPLOAD_ERR_OK){
            $logo = $_FILES['ayar_logo']['name'];
            $hedefKlasor = '../../images/ayar/logo/';
            $hedefDosya = $hedefKlasor.$logo;

            if(move_uploaded_file($_FILES['ayar_logo']['tmp_name'], $hedefDosya)){
                $logo = $logo;
            }else{
                echo "Logo Yükleme İşlemi Başarısız Oldu!";
            }
        }

        $favicon = null;

        if(isset($_FILES['ayar_favicon'])&& $_FILES['ayar_favicon']['error'] === UPLOAD_ERR_OK){
            $favicon = $_FILES['ayar_favicon']['name'];
            $hedefKlasor = '../../images/ayar/favicon/';
            $hedefDosya = $hedefKlasor.$favicon;

            if(move_uploaded_file($_FILES['ayar_favicon']['tmp_name'], $hedefDosya)){
                $favicon = $favicon;
            }else{
                echo "Favicon Yükleme İşlemi Başarısız Oldu!";
            }
        }
        $query = "UPDATE ayar SET ";

        if($logo)
        {
            $query .= "ayar_logo=:ayar_logo, ";
        }
        
        if($favicon)
        {
            $query .="ayar_favicon=:ayar_favicon, ";
        }

        $query .="ayar_telefon=:ayar_telefon, ayar_mail=:ayar_mail, ayar_adres=:ayar_adres, ayar_description=:ayar_description, ayar_keywords=:ayar_keywords, ayar_copyright=:ayar_copyright WHERE ayar_id=:ayar_id";
        $stmt =$this->connect()->prepare($query);

        $params = [
            'ayar_id' => $this->ayar_id,
            'ayar_telefon' => $this->ayar_telefon, 
            'ayar_mail' => $this->ayar_mail, 
            'ayar_adres' => $this->ayar_adres, 
            'ayar_description' => $this->ayar_description, 
            'ayar_keywords' => $this->ayar_keywords, 
            'ayar_copyright' => $this->ayar_copyright
        ];

        if($logo)
        {
            $params['ayar_logo'] = $logo;
        }
        if($favicon)
        {
            $params['ayar_favicon'] = $favicon;
        }
        return $stmt->execute($params);
    }
    public function sosyalAyarGuncelle()
    {
        $this->ayar_facebook = htmlspecialchars($_POST["ayar_facebook"], ENT_QUOTES);
        $this->ayar_twitter = htmlspecialchars($_POST["ayar_twitter"], ENT_QUOTES);
        $this->ayar_instagram = htmlspecialchars($_POST["ayar_instagram"], ENT_QUOTES);

        $query = "UPDATE ayar SET ayar_facebook=:ayar_facebook, ayar_twitter=:ayar_twitter, ayar_instagram=:ayar_instagram WHERE ayar_id=:ayar_id";
        $stmt =$this->connect()->prepare($query);

        $params = [
            'ayar_id' => $this->ayar_id,
            'ayar_facebook' => $this->ayar_facebook, 
            'ayar_twitter' => $this->ayar_twitter, 
            'ayar_instagram' => $this->ayar_instagram
        ];
        return $stmt->execute($params);
    }
}
class Modul extends Db
{
    private $modul_id;
    private $modul_ad;
    private $modul_sira;
    private $modul_durum;

    public function modulDuzenle()
    {
        $this->modul_id = $_GET["modul_id"];
        $this->modul_sira = htmlspecialchars($_POST["modul_sira"], ENT_QUOTES);
        $this->modul_durum = htmlspecialchars($_POST["modul_durum"], ENT_QUOTES);

        $query = "UPDATE modul SET modul_sira=:modul_sira, modul_durum=:modul_durum WHERE modul_id=:modul_id";
        $stmt = $this->connect()->prepare($query);

        $params = [
            'modul_id'    => $this->modul_id,
            'modul_sira'  => $this->modul_sira,
            'modul_durum' => $this->modul_durum
        ];
        return $stmt->execute($params);
    }
}
class Yonetici extends Db
{
    private $yonetici_id;
    private $yonetici_adsoyad;
    private $yonetici_mail;
    private $yonetici_username;
    private $yonetici_password;

    public function yoneticiEkle()
    {
        $this->yonetici_adsoyad  = htmlspecialchars($_POST["yonetici_adsoyad"], ENT_QUOTES);
        $this->yonetici_mail     = htmlspecialchars($_POST["yonetici_mail"], ENT_QUOTES);
        $this->yonetici_username = htmlspecialchars($_POST["yonetici_username"], ENT_QUOTES);
        $this->yonetici_password = password_hash($_POST["yonetici_password"], PASSWORD_DEFAULT);

        $query = "INSERT INTO yonetici(yonetici_adsoyad, yonetici_mail, yonetici_username, yonetici_password) VALUES (:yonetici_adsoyad, :yonetici_mail, :yonetici_username, :yonetici_password)";
        $stmt = $this->connect()->prepare($query);

        return $stmt->execute([
            'yonetici_adsoyad'  => $this->yonetici_adsoyad,
            'yonetici_mail'     => $this->yonetici_mail,
            'yonetici_username' => $this->yonetici_username,
            'yonetici_password' => $this->yonetici_password
        ]);
    }
    public function yoneticiDuzenle()
    {
        $this->yonetici_id       = $_GET["yonetici_id"];
        $this->yonetici_adsoyad  = htmlspecialchars($_POST["yonetici_adsoyad"], ENT_QUOTES);
        $this->yonetici_mail     = htmlspecialchars($_POST["yonetici_mail"], ENT_QUOTES);
        $this->yonetici_username = htmlspecialchars($_POST["yonetici_username"], ENT_QUOTES);
        $this->yonetici_password = htmlspecialchars(md5($_POST["yonetici_password"]), ENT_QUOTES);

        $query = "UPDATE yonetici SET yonetici_adsoyad=:yonetici_adsoyad, yonetici_mail=:yonetici_mail, yonetici_username=:yonetici_username, yonetici_password=:yonetici_password WHERE yonetici_id=:yonetici_id";

        $stmt = $this->connect()->prepare($query);

        $params = [
            'yonetici_id' => $this->yonetici_id,
            'yonetici_adsoyad' => $this->yonetici_adsoyad,
            'yonetici_mail' => $this->yonetici_mail,
            'yonetici_username' => $this->yonetici_username,
            'yonetici_password' => $this->yonetici_password
        ];
        return $stmt->execute($params);
    }
}
class Login extends Db
{

    private $yonetici_username;
    private $yonetici_password;

    public function girisYap()
    {
        $this->yonetici_username = $_POST["yonetici_username"];
        $this->yonetici_password = $_POST["yonetici_password"];

        $query = "SELECT * FROM yonetici WHERE yonetici_username=:yonetici_username";
        $stmt = $this->connect()->prepare($query);
        
        $stmt->execute([
            'yonetici_username' => $this->yonetici_username
        ]);
        $sayi = $stmt->rowCount();
        if($sayi > 0)
        {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $sifre = $user['yonetici_password'];

            if(password_verify($this->yonetici_password, $sifre))
            {
                session_start();
                $_SESSION["yonetici_adsoyad"] = $user["yonetici_adsoyad"];
                $_SESSION["yonetici_mail"] = $user["yonetici_mail"];
                $_SESSION["yonetici_username"] = $user["yonetici_username"];
                
                header("location:index.php");
            
            }
            else
            {
            echo '<div class="alert alert-danger" role="alert">Kullanıcı Adı veya şifre hatalı.</div>';

            }
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">Kullanıcı Adı Hatalı.</div>';
        }
    }
}




class services extends Db
{
    
}
?>
