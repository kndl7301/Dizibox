<?php 

session_start();
$baglan = mysqli_connect("localhost","root","","kayit") or die("connection failed:".connection_error());

 


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Dizibox</title>
    <link rel="icon" type="image/jpg" href="pictures/hd.jpg">
    <link rel="stylesheet" href="film.css">
</head>

<body id="body">


    <!-- NAVBAR -->
    <div class="navbar  fixed-top" id="navbar">
        <h1 style="color: red;cursor: pointer;width: 10%; " id="logo">Dizibox</h1>
        <ul id="ul">
            <a class="link" id="home" href="film.php">Home</a>
            <a class="link" id="movies" href="movies.html">Movies</a>
            <a class="link" id="series" href="series.html">Series</a>
            <a class="link" id="popular" href="popular.html">Popular</a>
            <a class="link" id="trend" href="trends.html">Trends</a>
           
            <a href="login.php" class="btn btn-danger" id="logout">logout <br></a>

            

            <div class="dropdown" >
                <i class="fa fa-bars" style="font-size: 35px;color: blue;"></i>
                <div class="dropdown-content">
                    
                        <li><br> email:
                            <?php  echo $_SESSION['email']?>
                        <br></li>
                        <hr>
                        <li> password:
                            <?php  echo $_SESSION['password']?>
                        <br></li>
                        <hr>
                        <a href="change-password.php"><li>change password  </li>   <br></a>
                       
                  
                </div>  
            </div>
             
            <style>
                .dropdown {
                    position: relative;
                    display: inline-block;
                    margin-left: -80px;
                }

                .dropdown-content {
                    display: none;
                    color: white;
                    position: absolute;
                    background-color: #000000;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                    padding: 12px 16px;
                    z-index: 1;
              
                    margin-left: -80px;
                }

                .dropdown:hover .dropdown-content {
                    display: block;
                }

                li{
                    list-style:none;
                }



                @media  (max-width:420px){

                    #logo{
                        margin-top: -120px;
                        font-size:50px;
                    }
                    #navbar{
                        height:200px;
                        width: 450px;
                    }

                    #home{
                        margin-top: 50px;
                        margin-left: -100px;
                        
                    }
                    #movies{
                        margin-left: -120px;
                       margin-top: 50px;
                    }
                    #series{
                        margin-left: -115px;
                        margin-top: 50px;
                    }
                    #popular{
                        margin-left: -400px;
                        margin-top: 100px;

                    }
                    #trend{
                        margin-left: -85px;
                        margin-top: 100px;
                    }

                    #sidebar{
                        margin-top: 80px;
                        text-align:center;
                       
                    }

                 


                    #logout{
                        height:35px;
                        margin-left: -300px;
                    }

                    #başlayın{
                        width:370px;
                       margin-right: 50px;

                    }
                    #compact{
                        margin-top: -90px;
                        margin-left: 140px;
                    }
                   
                

                    .section1{
                        margin-left: 10px;
                    }
                    .section2{
                        margin-left: 50px;
                    }
                    .section3{
                        margin-left: 50px;
                    }
                    .section4{
                        margin-top: 50px;
                    }

                    
                }
            </style>



    </div>


    <!-- YAN MENÜ İKONLARI -->


    <div class="sidebar" id="sidebar">

        <a href="">
            <img src="icons/house-door-fill.svg" width="32px" height="32px"
                style="border-radius: 40%; color: aliceblue;background-color:aliceblue; margin-top: 130px ;margin-left: 15px;">
        </a>


        <a href="" style="margin-top: -450px ;margin-left: -5px; ">
            <img src="icons/people-fill.svg" width="32px" height="32px"
                style="border-radius: 40%;background-color:aliceblue; margin-top: 660px ;margin-left: -30px;">
        </a>


        <a href="" style="margin-top: -360px; margin-left: -5px;">
            <img src="icons/bookmarks.svg" width="32px" height="32px"
                style="border-radius: 40%; color: aliceblue;background-color:aliceblue; margin-top: 660px ;margin-left: -30px;">
        </a>


        <a href="" style="margin-top: -270px; color: aliceblue">
            <img src="icons/cart-plus.svg" width="32px" height="32px"
                style="border-radius: 30%;background-color:rgb(240, 232, 232); margin-top: 660px; margin-left: -30px;">

        </a>


        <a href="https://www.instagram.com/" style="margin-top: -180px;">
            <img src="icons/instagram.svg" width="32px" height="32px"
                style="border-radius: 40%;background-color:aliceblue; margin-top: 660px ;margin-left: -30px;">
        </a>


        <a href="https://www.facebook.com/" style="margin-top: -90px;">
            <img src="icons/facebook.svg" width="32px" height="32px"
                style="border-radius: 40%;background-color:aliceblue; margin-top: 660px ;margin-left: -30px;">
        </a>


        <a href="https://www.tiktok.com/">
            <img src="icons/tiktok.svg" width="32px" height="32px"
                style="border-radius: 40%;background-color:aliceblue; margin-top: 660px ;margin-left: -30px;">
        </a>


    </div>



    <div class="arka" 
        style="margin-left: 60px; height: 1000px;background-image: linear-gradient(to top,rgb(19 9 9 / 80%) 0,rgba(0, 0, 0, 0.5) 40%,rgba(0, 0, 0, 0.5) 75%,rgba(5, 5, 5, 0.8) 100%),url(pictures/netflıxbackground.jpg);">

        <div class="yazı" >
            <h1  style="color: rgb(255, 251, 251); font-size: 65px; text-align: center;" >Sınırsız
                film, dizi ve çok <br> daha fazlası.</h1>
            <h3 style="color: white; margin-top: 35px;">İstediğiniz yerde izleyin. İstediğiniz zaman
                iptal edin.</h3>
            <h4 style="color: white; margin-top: 35px; ">İzlemeye hazır mısınız? Üyelik oluşturmak
                veya üyeliğinize erişmek için e posta adresinizi girin.</h4>
            <div id="başlayın" style="display: flex; ">
                <input class="form-control me-2 search" id="inputText"
                    style="width: 650px; height: 75px; margin-top: 50px; " type="text"
                    placeholder="E-posta adresinizi giriniz" aria-label="Search">
                <button class="btn1 " id="başla"
                    style="background-color: red; color: white; font-size: 30px; height: 75px ; margin-top: 50px; margin-left: -8px;">BAŞLAYIN


                    <img src="icons/chevron-compact-right.svg" id="compact" alt="" style="width: 30px ;height: 50px;">

                </button>


            </div>
        </div>


    </div>




    <!--FOOTEER-->

    <div class="footer" id="footer" style="background-color: rgb(10, 10, 10); color: white;">
        <div class="">
            <footer class="py-5 px-5">
                <div class="row">
                    <div class="col-2 section1">
                        <h5 id="section1">Section</h5>
                        <ul class="nav flex-column">
                            <li><a href="#" class=" text-muted">Home</a></li>
                            <li><a href="#" class=" text-muted">Features</a></li>
                            <li><a href="#" class=" text-muted">FAQs</a></li>
                            <li><a href="#" class=" text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col-2 section2">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li><a href="#" class=" text-muted">Help </a></li>
                            <li><a href="#" class=" text-muted">Privacy</a></li>
                            <li><a href="#" class=" text-muted"> test</a></li>
                            <li><a href="#" class=" text-muted">Account</a></li>
                        </ul>
                    </div>

                    <div class="col-2 section3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li><a href="#" class=" text-muted">Media </a></li>
                            <li><a href="#" class=" text-muted"> movie</a></li>
                            <li><a href="#" class=" text-muted"> Dizibox</a></li>
                            
                            <li><a href="#" class=" text-muted">ContactUs</a></li>
                        </ul>
                    </div>

                    <div class="col-4 offset-1 section4">
                        <form>
                            <h5>Subscribe to our web site</h5>
                            <p>Monthly digest of whats new and exciting from us.</p>

                            <div class="d-flex w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>

                            </div>
                        </form>
                        <br><br>
                        <div class="lang-selection-container" id="lang-switcher">
                            <div data-uia="language-picker+container" class="ui-select-wrapper"><label
                                    for="lang-switcher-select" class="ui-label"><span class="ui-label-text">Select
                                        Language</span></label>
                                <div class="select-arrow medium prefix globe"><select data-uia="language-picker"
                                        class="ui-select medium" id="lang-switcher-select" tabindex="0"
                                        style="background-color: rgb(141, 128, 128);" placeholder="lang-switcher">
                                        <option lang="tr" value="/tr/" data-language="tr" data-country="TR">Türkçe
                                        </option>
                                        <option selected="" lang="en" value="/tr-en/" data-language="en"
                                            data-country="TR">English</option>
                                    </select></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>© 2021 Company, Inc. All rights reserved.</p>

                </div>
            </footer>
        </div>



    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<script src="movies-data.js"></script>

</html>


