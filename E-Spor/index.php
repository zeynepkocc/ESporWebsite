<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>E-Spor Web Sitesi</title>
    <link rel="stylesheet" href="aa.css">
  </head>
  <body>
    <header class="header" > 
        <a href="#" class = "logo"> 
            <img src="images/esports.png.webp" alt="logo">
        </a>
        <nav class="navbar">
            <a href="http://localhost/E-Spor/index.php/" class="active">Anasayfa</a>
            <a href="http://localhost/E-Spor/Turnuvalar.php/">Turnuvalar</a>
            <a href="http://localhost/E-Spor/Oyunlar.php/">Oyunlar</a>
            <a href="http://localhost/E-Spor/Detail.php/">Forum</a>
            <a href="http://localhost/E-Spor/Iletisim.php/">İletişim</a>
        </nav>

        <div class="buttons">
            <button>
                <a href="http://localhost/E-Spor/Deneme.php/" method="post">
                  <input type="button" > <i class="fa-solid fa-user"></i>
                </a>
               
            </button>
        </div>
    </header>
    <div class="banner-image">
      <div class="banner-text">
        <h1>SPORUN YENİ YÜZÜ : E-SPOR</h1>
      </div>
    </div>
    <br>
    <br>
    <div class="sayfa">
      <div class="sliderKonum">
          <div class="slider">
              <a class="img-bir" href="https://liquipedia.net/valorant/VCT/2022/Champions">
                  <img src="images/valo.jpg" alt="resim">
              </a>
              <a class="img-iki" href="https://blog.counter-strike.net/index.php/2022/11/40340/">
                  <img src="images/csgo.jpg" alt="resim">
              </a>
              <a class="img-uc" href="https://lolemea.com/">
                  <img src="images/Lol.jpg" alt="resim"> 
              </a>
          </div>
      </div>
      <div class="text">
        <br>
        <p class="baslike">E-SPOR GÜNDEMİ</p>
        <br>
        <p>İstanbul'daki 2022 VALORANT Champions Tour (VCT) ana etabı tamamlandı.</p>
          <p>Yaşanan sürprizlerle akıllara kazınan Champions, kupayı Brezilya
        temsilcisi LOUD'un evine götürmesiyle sonuçlandı.</p>
        <p>Sonunda CSGO sahnesinin 5 haftadır her yeri kasıp kavuran macerası
        IEM Rio Major 2022</p>
        <p>sona erdi. Outsiders ve Heroic her ne kadar ilk 
        haritada oldukça sıkı mücadele etseler</p> 
        <p>de bu çekişme ikinci haritaya
        taşınmayınca final kısa bitti. Outsiders bu kritik mücadeleyi </p>
        <p>adeta 
        terlemeden kazandı. Finale kadar çok önemli ekipleri elemeyi başaran 
        Heroic için </p> 
        <p>bu sonuç hayli yıkıcı oldu.</p>
        <p>Avrupa'da on inanılmaz League of Legends Espor yılı geçirdikten sonra, 
        2023'e giden </p>
        <p>bölgenin geleceğine yönelik planlarımızı duyurmaktan onur
        duyuyoruz.</p>
        <p>Türkiye, BDT ve MENA Avrupa ile birleşerek rekabetçi ve birleşik
        bir bölge haline geliyor..</p>
        <br>
        <p class="bitis">HABERİN DETAYLARI İÇİN FOTOĞRAFA TIKLAYINIZ.</p>
      </div>
  </div>
  </body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

:root{
    --main-color: #b142e8;
    --black-color: #000000;
    --border: 0.1rem solid rgba(255,255,255,0.4); 
}

*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    transition: 0.2s ease;
}

/*! base gtml codes*/
html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}

body{
    background-color: var(--main-color);
    height: 200vh;
}
.header .logo img{
    height: 10rem;
}

.header{
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 7%;
    margin: 2rem 7%;
    border-radius: 30rem;
    box-shadow: 0px 0px 17px -2px rgba(0,0,0,0.75);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.header .navbar a{
    margin: 0 1rem;
    font-size: 1.6rem;
    color: var(--black-color);
    border-bottom: 0.1rem solid transparent;
}

.header .navbar .active,
.header .navbar a:hover{
    border-color: var(--main-color);
    padding-bottom: 0.5rem;
}

.header .buttons button{
    cursor: pointer;
    font-size: 2.5rem;
    margin-left: 2rem;
    background-color: transparent;
   
}
.banner-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/espor_banner.png");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.banner-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 25px;
  font-style: italic;
}
.sayfa{
  border-style: double;
  border-color: #000000;
  display: grid;
  grid-template-columns: repeat(2, 720px);
  width: 1400px;
  height: 405px;
  margin: 3rem ;
  background-color: #c1a6ce;
  box-shadow: 0px 0px 17px -2px rgba(0,0,0,0.75);
  border-radius: 3rem;
}
.sayfa .text{
  position: relative;
  left: 0px;
  font-size: 150%;
  color: black;
}
.sayfa .text .baslike{
  font-weight: bolder;
}
.sayfa .text .bitis{
  font-weight: bolder;
  font-style: italic;
}
.sliderKonum{
  border-radius: 3rem;
  position: relative;
  width: 700px;
  height: 400px;
  overflow: hidden;
}
.img-bir{left: 0px; border-radius: 3rem;}
.img-iki{left: 700px; border-radius: 3rem;}
.img-uc{left: 1400px; border-radius: 3rem;}

.sliderKonum > .slider{
  border-radius: 3rem;
  position: absolute;
  left:0px;
  width: 2800px;
  height: 400px;
  -webkit-animation-duration: 15s;
  -webkit-animation-name: sliders;
  -webkit-animation-iteration-count:infinite;
  -moz-animation-duration: 15s;
}
@-webkit-keyframes sliders{
  0% {left:0px;}
  10% {left:0px;}
  20% {left:-700px;}
  30% {left:-700px;}
  40% {left:-1400px;}
  50% {left:-1400px;}
}
@-moz-keyframes sliders{
  0% {left:0px;}
  10% {left:0px;}
  20% {left:-700px;}
  30% {left:-700px;}
  40% {left:-1400px;}
  50% {left:-1400px;}
}
@-ms-keyframes sliders {
  0% {left:0px;}
  10% {left:0px;}
  20% {left:-700px;}
  30% {left:-700px;}
  40% {left:-1400px;}
  50% {left:-1400px;}
}
@keyframes sliders{
  0% {left:0px;}
  10% {left:0px;}
  20% {left:-700px;}
  30% {left:-700px;}
  40% {left:-1400px;}
  50% {left:-1400px;}
}
.footer{
  background-color: var(--black-color);
  text-align: center;
}
.footer .search{
  display: flex;
  justify-content: center;
}
.footer .search .search-input{
  width: 40rem;
}
.footer .search .btn-primary{
  background-color: white;
  padding: 1rem 2rem;
  margin-left: 1rem;
}
.footer .share{
    padding: 2rem 0;
}
.footer .bottom{
  background-color: black;
}
.footer .bottom .text2{
  color: white;
}
</style>

<?php
  include("Baglanti.php");
?>

