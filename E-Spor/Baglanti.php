<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="0258852sa";
$vt_adi="E-Spor";
$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);
if(!$baglan){
    die("veritabanı bağlantı islemi basarısız.".mysqli_connect_error());
}
?>