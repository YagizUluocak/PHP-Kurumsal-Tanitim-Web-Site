<?php
class VeriGetir extends Db
{

    public function sliderGetir()
    {
        $query = "SELECT * FROM slider WHERE slider_durum = 1";   
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function servisGetir()
    {
        $query = "SELECT * FROM servis WHERE servis_durum = 1";   
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function hakkimizdaGetir()
    {
        $query = "SELECT * FROM hakkimizda WHERE hakkimizda_id = 1";   
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function nedenbizGetir()
    {
        $query = "SELECT * FROM nedenbiz WHERE ndn_durum = 1";   
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function takimGetir()
    {
        $query = "SELECT * FROM takim WHERE takim_durum = 1";   
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function ayarGetir()
    {
        $query = "SELECT * FROM ayar";   
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>