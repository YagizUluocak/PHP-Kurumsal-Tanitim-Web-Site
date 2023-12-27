<?php

class Slider extends Db
{
    private $slider_id;
    private $slider_baslik;
    private $slider_aciklama;
    private $slider_durum;

    public function sliderEkle()
    {
        $this->slider_baslik = htmlspecialchars($_POST['slider_baslik'], ENT_QUOTES);
        $this->slider_aciklama = htmlspecialchars($_POST['slider_aciklama'], ENT_QUOTES);
        $this->slider_durum = htmlspecialchars($_POST['slider_durum'], ENT_QUOTES);

        $query = "INSERT INTO slider(slider_baslik, slider_aciklama, slider_durum) VALUES (:slider_baslik, :slider_aciklama, :slider_durum)";
        $stmt = $this->connect()->prepare($query);
        
        $stmt->bindParam(':slider_baslik', $this->slider_baslik);
        $stmt->bindParam(':slider_aciklama', $this->slider_aciklama);
        $stmt->bindParam(':slider_durum', $this->slider_durum); 
        return $stmt->execute();
    }

    public function sliderGetir()
    {
        $query = "SELECT * FROM slider";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>