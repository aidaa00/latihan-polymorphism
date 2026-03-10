<?php

interface Notifikasi{
    public function kirim();
}

class Email implements Notifikasi{
    public function kirim(){
        echo "Notifikasi dikirim melalui Email <br>";
    }
}

class SMS implements Notifikasi{
    public function kirim(){
        echo "Notifikasi dikirim melalui SMS <br>";
    }
}

class WhatsApp implements Notifikasi{
    public function kirim(){
        echo "Notifikasi dikirim melalui WhatsApp <br>";
    }
}

$n1 = new Email();
$n2 = new SMS();
$n3 = new WhatsApp();

$n1->kirim();
$n2->kirim();
$n3->kirim();

?>