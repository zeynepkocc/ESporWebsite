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
    <header class="header"> 
        <a href="#" class = "logo"> 
            <img src="../images/esports.png.webp" alt="logo">
        </a>
        <nav class="navbar">
            <a href="http://localhost/E-Spor/index.php/">Anasayfa</a>
            <a href="http://localhost/E-Spor/Turnuvalar.php/" class="active">Turnuvalar</a>
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
    <div class="VALORANT">
    <div class="turnuva1">
      <table class="baslik">
        <tr>
          <th>VALORANT CHAMPIONS</th>
        </tr>
      </table>
        <table class="metin"><tr>
          <td class="a">Sıralama</td>
          <td class="a">Takımlar</td>
          <td class="a">Bölge</td>
          <td class="a">Para Ödülü</td>
        </tr>
        <?php
  include("Baglanti.php");
  $sec="SELECT t.YarismaSirasi, t.TakimAdi, t.Bölge, t.ParaOdulu FROM takımlar AS t INNER JOIN yarismalar AS y ON y.TurnuvaID=t.TurnuvaID WHERE y.TurnuvaID=1"; 
  $sonuc=$baglan->query($sec);
  if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
        echo "
        <tr>
            <td> ".$cek['YarismaSirasi']."</td>
            <td> ".$cek['TakimAdi']."</td>
            <td> ".$cek['Bölge']."</td>
            <td> ".$cek['ParaOdulu']."</td>
            
        </tr>
        ";
            
    }
  }
  
?>
    </table>
    </div>
  </div>
    
  </div>
</div>
<div class="CSGO">
    <div class="turnuva1">
      <table class="baslik">
        <tr>
          <th>PGL Major Stockholm</th>
        </tr>
      </table>
        <table class="metin"><tr>
          <td class="a">Sıralama</td>
          <td class="a">Takımlar</td>
          <td class="a">Bölge</td>
          <td class="a">Para Ödülü</td>
        </tr>
        <?php
  include("Baglanti.php");
  $sec="SELECT t.YarismaSirasi, t.TakimAdi, t.Bölge, t.ParaOdulu FROM takımlar AS t INNER JOIN yarismalar AS y ON y.TurnuvaID=t.TurnuvaID WHERE y.TurnuvaID=2"; 
  $sonuc=$baglan->query($sec);
  if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
        echo "
        <tr>
            <td> ".$cek['YarismaSirasi']."</td>
            <td> ".$cek['TakimAdi']."</td>
            <td> ".$cek['Bölge']."</td>
            <td> ".$cek['ParaOdulu']."</td>
            
        </tr>
        ";
            
    }
  }
  
?>
    </table>
    </div>
  </div>
    
  </div>
</div>

</table>
    </div>
  </div>
    
  </div>
</div>
<div class="LOL">
    <div class="turnuva1">
      <table class="baslik">
        <tr>
          <th>Word Champions Ship</th>
        </tr>
      </table>
        <table class="metin"><tr>
          <td class="a">Sıralama</td>
          <td class="a">Takımlar</td>
          <td class="a">Bölge</td>
          <td class="a">Para Ödülü</td>
        </tr>
        <?php
  include("Baglanti.php");
  $sec="SELECT t.YarismaSirasi, t.TakimAdi, t.Bölge, t.ParaOdulu FROM takımlar AS t INNER JOIN yarismalar AS y ON y.TurnuvaID=t.TurnuvaID WHERE y.TurnuvaID=3"; 
  $sonuc=$baglan->query($sec);
  if($sonuc->num_rows>0){
    
    while($cek=$sonuc->fetch_assoc()){
        echo "
        
        <tr>
            <td> ".$cek['YarismaSirasi']."</td>
            <td> ".$cek['TakimAdi']."</td>
            <td> ".$cek['Bölge']."</td>
            <td> ".$cek['ParaOdulu']."</td>
            
        </tr>
        ";
            
    }
  }
  
?>
    </table>
    </div>
  </div>
    
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
   
}

table, th, td {
  border: 1px solid;
  box-shadow: 0px 0px 17px -2px rgba(0,0,0,0.75);
}
.baslik{
  width: 100%;
  font-size: x-large;
  margin: 10px;
  background: #cc8eeb;
}
.metin{
  margin: auto;
  font-size: large;
  gap: 50px;
  background-color: #e0c5ed;
  text-align: center;

  
}
.metin .a{
  padding: 20px 100px;
  margin: 50px;
}

.CSGO{
  margin: 100px;
  
}

.VALORANT{
  margin: 100px;
  
}

.LOL{
  margin: 100px;
}


</style>


