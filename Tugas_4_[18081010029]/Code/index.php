<?php
$nama = "Amirah Aulia Fitri";
$about= "About";
$edukasi= "Education";
$movie= "Favorite Movie";
$hobby = "Hobby";
$cotact= "Contact Person";
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/style/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body>

        <!--Sidebar-->
        <input type="checkbox" id="check">
        <div class="sidebar">
            <ul>
                <li><label for="check"><i class="fas fa-times-circle fa-2x"></i></label></li>
                <li><a href="#about"><?php echo $about ?></a></li>
                <li><a href="#Education"><?php echo $edukasi ?></a></li>
                <li><a href="#Favorite-Movie"><?php echo $movie ?></a></li>
                <li><a href="#Hobby"><?php echo $hobby ?></a></li>
                <li><a href="#contact"><?php echo $cotact ?></a></li>
            </ul>
        </div>
        <!--Bagian Header-->
        <header>
            <div class="container">
                <h1><a href=""><?php echo "A!" ?></a></h1>
                <div class="header">
                    <ul>
                        <li><a href="#about"><?php echo $about ?></a></a></li>
                        <li><a href="#Education"><?php echo $edukasi ?></a></li>
                        <li><a href="#Favorite-Movie"><?php echo $movie ?></a></li>
                        <li><a href="#Hobby"><?php echo $hobby ?></a></li>
                        <li><a href="#contact"><?php echo $cotact ?></a></li>
                    </ul>

                     <!-- Menu Mobile View -->
                <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
                </div>
            </div>
        </header>
        <!--Halaman Depan-->
        <section class="banner">
            <div class="container">
                <div class="banner-left">
                    <img src="assets/image/foto1.jpeg">
                    <h6><?php echo" Assalamuaikum wr.wb"?></h6>
                    <h1><?php echo" I am"." ".$nama; ?></h1>
                    <h4>I am <span class="efek-ngetik"></span></h4>
                    <p>Welcome to my Web Profile</p></h6>
                </div>
            </div>    
        </section>

        <!--About-->
        <section id="about" class="about">
            <div class="container card">
                    <h3><?php echo $about ?></h3>
                    <p><?php echo "Hallo, Nama saya"." ".$nama."."?>
                    <?php echo"Sekarang saya sedang menempuh pendidikan di Universitas UPN 'Veteran' Surabaya.
                        Saya anak ke-2 dari 3 bersaudara. Saya memiliki kakak perempuan bernama Nabilah 
                        dan saya memiliki adik perempuan bernama Safira Rusyda."?>
                    </p>
            </div>
        </section>
        <!--Education-->
        <section id="Education">
            <div class="container1 card">
                <h3><?php echo $edukasi ?></h3>
                    <div class="hobby">
                        <img src="assets/image/teaching.png">
                        <p><?php echo "SDN Krembangan Utara 2/57" ?></p>
                    </div>
                    <div class="hobby">
                        <img src="assets/image/school.png">
                        <p><?php echo "SMP Negeri 2 Surabaya" ?></p>
                    </div>
                    <div class="hobby">
                        <img src="assets/image/primary.png">
                        <p><?php echo "SMA Negeri 8 Surabaya" ?></p>
                    </div>
                    <div class="hobby">
                        <img src="assets/image/campus.png">
                        <p><?php echo "UPN 'Veteran' Surabaya"?></p>
                    </div>
            </div>
        </section>
        <!--Favorite Movie-->
        <section id="Favorite-Movie">
            <div class="container1 card">
                <h3><?php echo $movie ?></h3>
                <div class="col-4">
                    <a href="https://id.wikipedia.org/wiki/Toy_Story_4#:~:text=Toy%20Story%204%20adalah%20sebuah,dirilis%20oleh%20Walt%20Disney%20Pictures.">
                        <img src="assets/image/toy_story2.jpg">
                        <span><?php echo "Toy Story" ?></span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="https://id.wikipedia.org/wiki/212:_The_Power_of_Love">
                        <img src="assets/image/TOL.jpg">
                        <span><?php echo "The Power of Love"?></span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="https://id.wikipedia.org/wiki/Train_to_Busan#:~:text=Train%20to%20Busan%20(Hangul%3A%20%EB%B6%80%EC%82%B0%ED%96%89,sesi%20Penayangan%20Tengah%20Malam%20di">
                        <img src="assets/image/train_to_busan.jpg">
                        <Span><?php echo "Train to Busan" ?></Span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="https://id.wikipedia.org/wiki/Ayat-ayat_Cinta_2">
                        <img src="assets/image/AAC2.jpg">
                        <span><?php echo" Ayat-Ayat Cinta 2"?></span>
                       
                    </a>
                </div>
            </div>
        </section>
        <!--Hobby-->
        <section id="Hobby">
            <div class="container1 card">
                <h3><?php echo $hobby ?></h3>
                <div class="hobby">
                    <img src="assets/image/camera.png">
                    <p><?php echo"Fotografi"?></p>
                </div>
                <div class="hobby">
                    <img src="assets/image/studying.png">
                    <p><?php echo"Membaca Novel"?></p>
                </div>
                <div class="hobby">
                    <img src="assets/image/volleyball.png">
                    <p><?php echo"Bermain Bola Voly"?></p>
                </div>
                <div class="hobby">
                    <img src="assets/image/paint.png">
                    <p><?php echo"Melukis"?></p>
                </div>
            </div>
        </section>
        
        <!--Contact-->
        <section id="contact">
            <div class="container1 card">
                <h3><?php echo $cotact ?></h3>
                <div class="col-3">
                    <h4><?php echo"Alamat"?></h4>
                    <img src="assets/image/home.png">
                    <p><?php echo"Jl. Kebalen Kulon 2/1-3"?></p>
                </div>
                <div class="col-3">
                    <h4><?php echo"Email"?></h4>
                    <img src="assets/image/message.png">
                    <p><?php echo"airaaulia25@gmail.com"?></p>
                </div>
                <div class="col-3">
                    <h4><?php echo"Telp/Hp"?></h4>
                    <img src="assets/image/phone-ringing.png" >
                    <p><?php echo"0313550538"?></p>
                </div>
            </div>
        </section>
         <script src="assets/js/script.js"></script>
    </body>
    <footer>
        <p> Copyright&copy; 2020 - <?php echo $nama ?></p> 
    </footer>
</html>

