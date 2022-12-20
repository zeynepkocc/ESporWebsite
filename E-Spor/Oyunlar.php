<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyunlar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header"> 
        <a href="#" class = "logo"> 
            <img src="../images/esports.png.webp" alt="logo">
        </a>
        <nav class="navbar">
            <a href="http://localhost/E-Spor/index.php/">Anasayfa</a>
            <a href="http://localhost/E-Spor/Turnuvalar.php/" >Turnuvalar</a>
            <a href="http://localhost/E-Spor/Oyunlar.php/"class="active">Oyunlar</a>
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
    <section class="oyunlar1">
        <div class="oyunlar-box">
            <div class="box">
                <div class="box-head">
                    <p class="title">VALORANT</p>
                    <hr width="100%" color="black" size="3">
                    <br>
                    <br>
                </div>
                <div class="image">
                    <a href="https://playvalorant.com/tr-tr/">
                        <img src="../images/valorant.jpg">
                    </a>
                </div>
            </div>
            <table class="valo">
                <tr>
                  <th class="vtext">Valorant (VALORANT olarak stilize edilir), Riot Games tarafından geliştirilip yayınlanan bir free-to-play çok oyunculu taktiksel birinci şahıs nişancı video oyunudur.
                    Valorant, farklı özel yeteneklere ve yaşam öykülerine sahip 20 adet ajan içerir. Bu ajanlar; düellocu, gözcü, öncü ve kontrol uzmanı olarak dört role ayrılır.
                  </th>
                </tr>
              </table>  
        </div>
    </section>
    <br>
    <br>
    <br>
    <section class="oyunlar2">
        <div class="oyunlar-box">
            <div class="box">
                <div class="box-head">
                    <p class="title">CS : GO</p>
                    <hr width="100%" color="black" size="3">
                    <br>
                    <br>
                </div>
                <div class="image">
                    <a href="https://blog.counter-strike.net/">
                        <img src="../images/csgo1.jpg">
                    </a>
                </div>
            </div>
            <table class="csgo">
                <tr>
                  <th class="ctext">Counter-Strike (Türkçe: Karşı Saldırı) veya kısaca CS, Valve Corporation tarafından geliştirilen bir birinci şahıs nişancı türünde taktiksel aksiyon video oyunu serisidir.
                  </th>
                </tr>
              </table>  
        </div>
    </section>
    <br>
    <br>
    <br>
    <section class="oyunlar3">
        <div class="oyunlar-box">
            <div class="box">
                <div class="box-head">
                    <p class="title">LEAGUE OF LEGENDS</p>
                    <hr width="100%" color="black" size="3">
                    <br>
                    <br>
                </div>
                <div class="image">
                    <a href="https://www.leagueoflegends.com/tr-tr/">
                        <img src="../images/lol1.jpg">
                    </a>
                </div>
            </div>
            <table class="lol">
                <tr>
                  <th class="ltext">League of Legends (Kısaca LoL, Türkçe anlamı: Efsaneler Ligi), Riot Games tarafından geliştirilen ve yayımlanan video oyunu. 27 Ekim 2009 tarihinde Riot Games'in ilk oyunu olarak "League of Legends: Clash of Fates" adıyla piyasaya çıkmıştır. MOBA türü strateji oyunudur.
                  </th>
                </tr>
              </table>  
        </div>
    </section>
    <br>
    <br>
    <br>
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
    text-transform: capitalize;
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
    color: black;
   
}
.oyunlar1{
    margin: auto;
}
.oyunlar1 .oyunlar-box{
    display: grid;
    grid-template-columns: repeat(auto-fit, (30rem,1fr));
    gap: 1.5rem;
}
.oyunlar1 .oyunlar-box .box{
    text-align: center;
    background-color: #b142e8;
}
.oyunlar1 .oyunlar-box .box .title{
    padding: 5px 5px;
    font: bolder;
    margin: auto;
    width: 100%;
    font-size: x-large;
}
.oyunlar1 .oyunlar-box .valo{
    border: 1px solid;
    font-size: 20px;
    margin: auto;
    width: 1000px;
    background-color: #ca7ff0;
}
.oyunlar1 .oyunlar-box .valo .vtext{
    margin: auto;
    padding: 5px;
}
.oyunlar2{
    margin: auto;
}
.oyunlar2 .oyunlar-box{
    display: grid;
    grid-template-columns: repeat(auto-fit, (30rem,1fr));
    gap: 1.5rem;
}
.oyunlar2 .oyunlar-box .box{
    text-align: center;
    background-color: #b142e8;
}
.oyunlar2 .oyunlar-box .box .title{
    padding: 5px 5px;
    font: bolder;
    margin: auto;
    width: 100%;
    font-size: x-large;
}
.oyunlar2 .oyunlar-box .csgo{
    border: 1px solid;
    font-size: 20px;
    margin: auto;
    width: 1000px;
    background-color: #ca7ff0;
}
.oyunlar2 .oyunlar-box .csgo .ctext{
    margin: auto;
    padding: 5px;
}
.oyunlar3{
    margin: auto;
}
.oyunlar3 .oyunlar-box{
    display: grid;
    grid-template-columns: repeat(auto-fit, (30rem,1fr));
    gap: 1.5rem;
}
.oyunlar3 .oyunlar-box .box{
    text-align: center;
    background-color: #b142e8;
}
.oyunlar3 .oyunlar-box .box .title{
    padding: 5px 5px;
    font: bolder;
    margin: auto;
    width: 100%;
    font-size: x-large;
}
.oyunlar3 .oyunlar-box .lol{
    border: 1px solid;
    font-size: 20px;
    margin: auto;
    width: 1000px;
    background-color: #ca7ff0;
}
.oyunlar3 .oyunlar-box .lol .ltext{
    margin: auto;
    padding: 5px;
}
</style>

<?php
     include("Baglanti.php");
?>