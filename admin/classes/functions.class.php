<?php
class Veri extends Db
{
    private $tablo_ad;
    private $tablolar = ['slider','servis','hakkimizda'];

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
}

?>