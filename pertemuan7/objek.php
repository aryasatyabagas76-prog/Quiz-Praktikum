<?php

class Kendaraan{
    private $merk = "";
    private $model = "";
    private $warna = "";
    private $roda = 0;

    function Klakson(){
        echo "<br> Honk! <br><br>";
    }
    
    //get untuk atribut class
    function Setmerk($brand){
        $this->merk = "$brand";
    }
    function Setmodel($series){
        $this->model = "$series";
    }
    function Setwarna($colors){
        $this->warna = "$colors";
    }
    function Setroda($tire){
        $this->roda = "$tire";
    }

    //get untuk class
    function Getmerk(){
        return $this->merk;
    }
    function Getmodel(){
        return $this->model;
    }
    function Getwarna(){
        return $this->warna;
    }
    function Getroda(){
        return $this->roda;
    }
    function SetAllData($brand, $series, $colors, $tire){
        $this->merk = "$brand";
        $this->model = "$series";
        $this->warna = "$colors";
        $this->roda = "$tire";
    }
    function GetAllData($brand, $series, $colors, $tire){
        $brand = $this->merk;
        $series = $this->model;
        $colors = $this->warna;
        $tire = $this->roda;

    }

    // //tag pembuka
    // function __construct(){
    // echo "<h3>Data sebuah Kendaraan </h3><br><br>". $this->Getmerk();        
    // }

    // //tag penutup
    // function __destruct(){
    // echo "<h5>contact . about . home</h5><br><br>". $this->Getmerk();        
    // }

}

class Motor extends Kendaraan {
    
    function StandarON(){
        echo "ON";
    }
    function StandarOff(){
        echo "hihu";
    }
}

class Segitiga {
     private $alas = 0;
     private $tinggi = 0;
     private $sisi;
     
     function setAlas($a){
        $this-> alas = $a;
     }
     function setTinggi($a){
        $this-> tinggi = $a;
     }
     function setSisi($a){
        $this-> sisi = $a;
     }


     function getAlas(){
         return $this->alas;
     }

     function getTinggi(){
        return $this->tinggi;
     }

     function getSisi(){
        return $this->sisi;
     }

}

class SegitigaSamaKaki extends Segitiga {
    function luas(){
        echo "Luasnya Adalah" . 1/2 * $alas * $tinggi;
    }
    function keliling(){
        echo "Kelilingya Adalah "
    }
}
class SegitigaSamaSiku extends Segitiga {
    function luas(){
        echo "Luasnya Adalah" . 1/2 * $alas * $tinggi;
    }
    function keliling(){
        echo "Kelilingya Adalah "
    }
}
class SegitigaSamaSisi extends Segitiga {
    function luas(){
        echo "Luasnya Adalah" . 1/2 * $alas * $tinggi;
    }
    function keliling(){
        echo "Kelilingya Adalah "
    }
}




$mobil = new Kendaraan();
$motor = new Motor();

$motor->Setmerk("Yamaha");
$motor->Setmodel("Vixion");
$motor->Setwarna("Putih");
$motor->Setroda(2);


$mobil->Setmerk("BMW");
$mobil->Setmodel("M4");
$mobil->Setroda(4);
$mobil->Setwarna("White");

//merk = "bmw";


//mobil
echo "Merk : ". $mobil -> Getmerk(). "<br>";
echo "Model : ". $mobil -> Getmodel(). "<br>";
echo "Warna : ". $mobil -> Getwarna(). "<br>";
echo "Roda : ". $mobil -> Getroda(). "<br>";

$mobil->Klakson();


//motor
echo "Merk : ". $motor -> Getmerk(). "<br>";
echo "Merk : ". $motor -> Getmodel(). "<br>";
echo "Merk : ". $motor -> Getwarna(). "<br>";
echo "Merk : ". $motor -> Getroda(). "<br>";

$motor->StandarOff();

$kapal = new Kendaraan();


$kapal->SetAllData("Kapal Lawd","Arid Edan","Putih Hitam",0);