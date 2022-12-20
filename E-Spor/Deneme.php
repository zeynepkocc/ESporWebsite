<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Kayıt Formu</title>
    <link rel="stylesheet" href="styles/style1.css">
  </head>
  <body>
  <header class="header" > 
        <a href="#" class = "logo"> 
            <img src="../images/esports.png.webp" alt="logo">
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
    <div class = "signupform">
        <form action="http://localhost/E-Spor/Deneme.php/" method="post">
        <div class ="yazi">
        <h1>Kayit Ol</h1>
        <input type="text" placeholder="Ad Soyad" class="txt" name="adsoyad">
        <input type="text" placeholder="Email" class="txt" name="email">
        <input type="password" placeholder="Sifre" class="txt" name="sifre">
      
        <input type="submit" value="Kayıt OL" onclick="" class="signup-btn">
        </form>
        <form action="http://localhost/E-Spor/GirisYap.php/" method="post">
            <input type="submit" value="Zaten bir hesabınız mı var? Lütfen Giriş Yapın" onclick="" class="signup-btn">
        </form>
        </div> 
    </div>
  </body>

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
    body{
    margin: 0;
    padding: 0;
    background: #b142e8;
    }
    .signupform{
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/login.jpg");
      height: 50%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
     
    }
    .signupform .yazi{
      text-align: center;
      position: absolute;
      top: 70%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;

    }

    .signupform h1{
        margin-top: 100px;
        color: #fff;
        font-size: 40px;
    }

    .signupform input{
        display: block;
        width: 100%;
        padding: 0 16px;
        height: 44px;
        text-align: center;
        box-sizing: border-box;
        border: none;
    }
    .txt{
        margin: 30px 0;
        border-radius: 6px;
    }

    .signup-btn{
        margin-top: 15px;
        background: black;
        color: #fff;
        border-radius: 44px;
        cursor: pointer;
        transition: 0.8s;
        display: block;
    }
    .signup-btn:hover{
        transform: scale(0.96);
        background: #fff;
        color:#538fef;

    }

  </style>
<?php
  include("Baglanti.php");
 
    if(isset($_POST["adsoyad"],$_POST["email"],$_POST["sifre"])){
        
      $Ad_Soyad=$_POST["adsoyad"];
      $EMail=$_POST["email"];
      $Sifre=$_POST["sifre"];
      $ekle="INSERT INTO `kullanicilar`(`Ad_Soyad`, `EMail`, `Sifre`) VALUES ('".$Ad_Soyad."','".$EMail."','".$Sifre."')";
      if($baglan->query($ekle)===TRUE){
        echo "<script>alert('basarıyla kayıt oldunuz.')</script>";
      }else{
        echo "olamdı";
      }
    }
?>

