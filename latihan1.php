<?php

class BangunDatar {
    public function hitungLuas(){
        return 0;
    }
}

class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }

    public function hitungLuas(){
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran extends BangunDatar {
    private $r;

    public function __construct($r){
        $this->r = $r;
    }

    public function hitungLuas(){
        return pi() * $this->r * $this->r;
    }
}

class Segitiga extends BangunDatar {
    private $alas;
    private $tinggi;

    public function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas(){
        return 0.5 * $this->alas * $this->tinggi;
    }
}

$p = new Persegi(5);
$l = new Lingkaran(9);
$s = new Segitiga(6,4);

echo "Luas Persegi : ".$p->hitungLuas()."<br>";
echo "Luas Lingkaran : ".$l->hitungLuas()."<br>";
echo "Luas Segitiga : ".$s->hitungLuas()."<br>";

?>