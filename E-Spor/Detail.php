<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!--NavBar Section-->
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="http://localhost/E-Spor/Posts.php">Konular</a></li>
                    <li class="nav-item"><a href="http://localhost/E-Spor/Detail.php">Kullanıcılar</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">E-Spor Sözlük</div>
        </div>
        
    <div class="container">
        <!--Topic Section-->
        <div class="topic-container">
            <!--Original thread-->
            <div class="head">
                <div class="authors">Yazarlar</div>
            </div>

            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">zeycoach</a></div>
                    <div>immo</div>
                    <img src="../images/jet.jpg" alt="">
                    <div>Posts: <u>45</u></div>
                    <div>Points: <u>4586</u></div>
                </div>
                <div class="content"><br>
                    <br>
                    Valorant son güncelleme. Sage'in kendine heal atamaması.
                    <br>
                    <br>
                    <hr>
                    HCK'ya cevap verdi.
                    <br>
                    <div class="comment">
                        <button onclick="showComment()">Yanıtla</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Comment Area-->
        <div class="comment-area hide" id="comment-area">
            <form action="http://localhost/E-Spor/Detail.php/" method="post">
                <textarea placeholder="Mesajınız" name="yorum"></textarea>
                <input type="submit" value="Gönder" onclick="">a
            </form>
            
       
        </div>

        <!--Comments Section-->
        <div class="comments-container">
            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">lilyum</a></div>
                    <div>immo</div>
                    <img src="../images/viper.jpg" alt="">
                    <div>Posts: <u>455</u></div>
                    <div>Points: <u>4586</u></div>
                </div>
                <div class="content">
                    <br><br>
                    Bu ulti yenilenme süresinde nasıl clutch almamızı bekliyorsunuz ?!?!
                    <br>
                    <br>
                    <hr>
                    balbasara'a cevap verdi
                    <br>
                    <div class="comment">
                        <button onclick="showReply()">Yanıtla</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Reply Area-->
        <div class="comment-area hide" id="reply-area">
        <form action="http://localhost/E-Spor/Detail.php/" method="post">
                <textarea placeholder="Mesajınız" name="yorum"></textarea>
                <input type="submit" value="Gönder" onclick="">a
            </form>
            
        </div>
    </div>
    
    <script src="main.js"></script>
</body>
</html>
<style>
/* ########################################### */
/*                 Global                      */
/* ########################################### */
*{
    box-sizing: border-box;
}

html{
    font-size: 14px;
    font-family: 'Titillium Web', sans-serif;
    background-color:rgb(0,0,0);
    color: #FEFEFF;
}

a{
    color: #b142e8;;
    font-weight: bolder;
    text-decoration: none;
}

h1{
    font-size:16px;
    font-weight: bolder;
}



/* For the tablets */
@media screen and (min-width: 460px) and (max-width: 1024px) {
    .container{
        margin: 15px;
        padding: 15px;
    }

    .subforum-row{
        display: grid;
        grid-template-columns: 10% 60% 10% 20%;
    }

    .subforum-icon i{
        font-size: 35px;
    }

    html{
        font-size: 14px;
    }

    h1{
        font-size: 16px;
    }

  }
/*   Header Section    */

header{
    margin-inline: 10px;
}
  /* Nav Bar styles */
.navbar{
    display:flex;
    align-items: center;
}
.navigation{
    background-color:#52057b;
    padding: 10px;
    width: 65%;
    display: inline-block;
    border-radius: 5px;
    max-height: 80px;
    margin-right:10px;
}

.close-icon i{
    font-size:60px;
    float: left;
    cursor: pointer;
}

.nav-list{
    list-style-type:none;
    overflow: hidden;
}

.nav-item a{
    float: right;
    display:block;
    text-align: center;
    margin-inline: 20px;
    font-size: 20px;
    padding: 10px;
    color:#fff;
}

.nav-item a:hover{
    background-color: rgb(0,0,0,0.1);
}

.hide{
    display: none;
}

.bar-icon{
    font-size: 60px;
    display: inline-block;
    margin-right:10px;
    color: #fff;
    cursor: pointer;
}

@font-face {
    font-family:aquire;
    src:url(aquire.otf);
}

.brand{
    font-size:60px;
    display: inline-block;
    font-family:aquire;
    color: #b142e8;;
}

/*Navbar for the smartphones*/
@media screen and (max-width: 460px){
    .navigation{
        max-height: auto;
    }
    
    .close-icon i{
        font-size:30px;
    }
    
    .nav-item a{
        float:left;
        display:inline;
        margin-inline: 3px;
        font-size: 10px;
        padding: 5px;
    }
    
    
    .bar-icon{
        font-size: 30px;
    }
 
    .brand{
        font-size:20px;
    }
}

  /* Search Box styles */
.search-box{
    border: solid 1px #52057b;
    margin-top: 20px;
    padding: 40px;
    display:flex;
    justify-content: center;
    box-shadow:1px 2px 3px #52057b;
}

.search-box select{
    padding: 10px;
}

.search-box input{
    padding: 10px;
}

.search-box button{
    padding: 10px;
    background-color:#fff;
    color:#000000;
}

.search-box button:hover{
    background-color: #000000;
    color: #fff;
    box-shadow: 1px 2px 3px #fff;
}

/* search box for smrtphones */
@media screen and (max-width: 460px){
    .search-box input, .search-box button, .search-box select{
        min-width: 300px;
        margin-top: 5px;
    }    

}

/* forum info Styling */
.forum-info{
    padding: 20px;
    background-color: #111314;
}

.chart{
    font-size:20px;
    font-weight:bold;
}
/* Footer Styling */

footer{
    margin-top: 20px;
    padding: 20px;
    background-color:  #52057b;
    display: block;
    text-align: center;
}

/* ########################################### */
/*            posts.html                       */
/* ########################################### */

/* posts table's head  */
.table-head{
    display: flex;
}

.table-head div{
    padding: 5px;
    margin: 2px;
    background-color: #2C2C2C;
    font-weight: bold;
}

.table-head .status{
    flex: 5%;
}

.table-head .subjects{
    flex: 70%;
}

.table-head .replies{
    flex: 10%;
}

.table-head .last-reply{
    flex: 15%;
}

/* posts table's body  */

.table-row{
    display: flex;
}

.table-row .status, .table-row .subjects, .table-row .replies, .table-row .last-reply{
    padding: 5px;
    margin: 2px;
    background-color: #131415;
}

.table-row .status{
    flex: 5%;
    font-size: 30px;
    text-align: center;
}

.table-row .subjects{
    flex: 70%;
}

.table-row .replies{
    flex: 10%;
}

.table-row .last-reply{
    flex: 15%;
}

/* navigation path*/
.navigate{
    margin-block: 20px;
    font-weight: lighter;
    font-size: 24px;
}

.navigate a{
    color: #fff;
}

.navigate a:hover{
    color: #b142e8;
    font-weight: bolder;
}

/* Pagination*/

.pagination{
    padding: 20px;
    font-size: 15px;
}

.pagination a{
    color: #fff;
    margin-inline: 5px;
    padding: 5px 10px;
    border: solid 0.5px #fff;
}

.pagination a:hover{
    opacity: 0.5;
}

.note{
    background-color:#111314;
    padding: 20px;
    display: block;
}

.note span{
    font-size: 20px;
    margin-block: 5px;
}


/* ########################################### */
/*            detail.html                      */
/* ########################################### */

.head{
    display: flex;
    background-color: #2C2C2C;
    padding: 5px;
    font-weight: bold;
    font-size: 15px;
}

.authors{
    flex: 20%;
}

.content{
    flex: 80%;
}

.body{
    display: flex;
    background-color: #131415;
    padding: 10px;
    margin-top: 5px;
}

.body .authors .username{
    font-size: 20px;
}

.body .authors img{
    max-width: 50px;
    max-height: 80px;
}

.body .content .comment button{
    border:none;
    padding:10px;
    font-weight: bolder;
    box-shadow: 4px 6px #fff;
    cursor: pointer;
    float: right;
}

/* comment section */
.comment-area{
    margin-bottom:50px;
}

.comment-area textarea{
    width: 100%;
    min-height: 100px;
    padding: 10px;
    margin-block: 10px;
}

.comment-area input{
    float: right;
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
}

.comment-area input:hover{
    border: solid 1px #000000;
}


</style>

<script>
    //NavBar
function hideIconBar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:none;");
    navigation.classList.remove("hide");
}

function showIconBar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:block;");
    navigation.classList.add("hide");
}

//Comment
function showComment(){
    var commentArea = document.getElementById("comment-area");
    commentArea.classList.remove("hide");
}

//Reply
function showReply(){
    var replyArea = document.getElementById("reply-area");
    replyArea.classList.remove("hide");
}
</script>
<?php
  include("Baglanti.php");
    if(isset($_POST["yorum"])){
      $yorum=$_POST["yorum"];
      $order_date= date("Y-m-d h:i");
      $ekle="INSERT INTO `forum`(`Konu`, `Tarih`) VALUES ('".$yorum."','".$order_date."')";
      if($baglan->query($ekle)===TRUE){
        echo "<script>alert('basarıyla kayıt oldunuz.')</script>";
      }else{
        echo "olamdı";
      }
    }
?>

