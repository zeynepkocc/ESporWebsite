<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>İletişim</title>
    <link rel="stylesheet" href="styles/style2.css">
  </head>
  <body>
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-market-alt"></i>
                    <div class="topic">Adres </div>
                    <div class="text">İstanbul</div>
                    <div class="text">Türkiye</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Telefon</div>
                    <div class="text">+90 546 857 52 59</div>
                    <div class="text">+90 539 517 49 84</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">E-Posta</div>
                    <div class="text">info@simzeymedya.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Bize Mesaj Gönderin</div>
                <form action="http://localhost/E-Spor/Iletisim.php/" method="post">
                    <div class="input-box">
                        <input type="text" placeholder="Adınız" name="ad">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="E-Mail Adresiniz" name="email">
                    </div>
                    <div class="input-box message-box">
                        <textarea rows="5" placeholder="Mesajınız" name="mesaj"></textarea>
                    </div>
                    <div class="button">
                        <input type="submit" value="Gönder" onclick="" class="signup-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
  </html>

  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body{
    min-height: 100vh;
    width: 100%;
    background: #b142e8;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container{
    width: 85%;
    background: white;
    border-radius: 6px;
    padding: 20px 60px 30px 40px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.container .content .left-side{
    width: 25%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    position: relative;
}
.content .left-side::before{
    content: '';
    position: absolute;
    height: 70%;
    width: 2px;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
}
.content .left-side .details{
    margin: 14px;
    text-align: center;
}
.content .left-side .details i{
    font-size: 30px;
    color: #007eff;
    margin-bottom: 10px;
}
.content .left-side .details .topic{
    font-size: 18px;
    font-weight: 500;
}
.content .left-side .details .text{
    font-size: 14px;
    color: #afafb6;
}
.content .right-side{
    width: 75%;
    margin-left: 75px;
}

.right-side .topic-text{
    font-size: 23px;
    font-weight: 600;
    color: #b142e8;
}
.right-side .input-box{
    height: 50px;
    width: 100%;
    margin: 12px 0;
}
.input-box input,
.input-box textarea{
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    font-size: 16px;
    background: #F8F1F8;
    border-radius: 6px;
    padding: 0 15px;
    resize: none;
}
.message-box{
    min-height: 110px;
}
.input-box textarea{
    padding-top: 6px;
}
.signup-btn{
    display: inline-block;
    margin-top: 12px;
}
.signup-btn{
    color: white;
    font-size: 18px;
    outline: none;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    background:  #b142e8;
    cursor: pointer;
    transition: all 0.3s ease;
}
.signup-btn:hover{
    background: #b142e8;
    border-radius: 30rem;
}

@media (max-width: 950px){
    .container{
        width: 90%;
        padding: 30px 40px 40px 35px;
    }
    .content .right-side{
        width: 75%;
        margin-left: 55px;
    }
}

@media (max-width: 820px){
    .container{
        margin: 40px 0;
        height: 100%;
    }
    .content{
        flex-direction: column-reverse;
    }
    .left-side{
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
    }
    .left-side::before{
        display: none;
    }
    .right-side{
        width: 100%;
        margin-left: 0;
    }
}

  </style>
  
  <?php
      include("Baglanti.php");
      if(isset($_POST["ad"],$_POST["email"],$_POST["mesaj"])){
        $Ad=$_POST["ad"];
        $EMail=$_POST["email"];
        $Mesaj=$_POST["mesaj"];
        $ekle="INSERT INTO `mesajlar`(`Ad`, `EMail`, `Mesaj`) VALUES ('".$Ad."','".$EMail."','".$Mesaj."')";
        if($baglan->query($ekle)===TRUE){
          echo "<script>alert('Mesajiniz basariyla iletilmistir.')</script>";
        }else{
          echo "<script>alert('Bir hata olustu. Lutfen daha sonra tekrar deneyiniz.')</script>";
        }
      }
  ?>