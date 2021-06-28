<?php


$server="localhost";
$username="venkatesh";
$password="abc123";
$database="agile";

$conn=mysqli_connect($server,$username,$password,$database);


if($_SERVER["REQUEST_METHOD"]=="POST"){

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['subject'];
$d=$_POST['feedback'];

$sql="INSERT INTO feedback values('$a','$b','$c','$d')";

$res=mysqli_query($conn,$sql);




}

?>






<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Music Website</title>
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Websitephp.css'>
    <script src='main.js'></script>
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="70">


    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand custom_logo" href="#"><span>Music-E</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-2">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item ml-2">
              <a class="nav-link" href="#blog">Artists</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="#services">Songs</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="#client">Clients</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="Account.php">Account</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="Login.php">Logout</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>



    <section id="home" class="banner cover-bg">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12 caption text-center">
                    <h4 class="mt-20 mb-20">WELCOME</h4>
                    <h2 class="mt-20">I'M YOUR MUSIC-E</h2>
                    <p class="mt-20">Thinking of some music,<br> then I'm your result of your search.</p>
                    <div class="social_icon text-center mt-20">

                        <a href="https://www.facebook.com" target="blank"><span><i class="fa fa-facebook"></i></span></a>
                        <a href="https://www.twitter.com" target="blank"><span><i class="fa fa-twitter"></i></span></a>
                        <a href="https://www.linkedin.com" target="blank"><span><i class="fa fa-linkedin"></i></span></a>
                        <a href="https://www.instagram.com" target="blank"><span><i class="fa fa-instagram"></i></span></a>
                        <a href="https://www.youtube.com" target="blank"><span><i class="fa fa-youtube-play"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="blog" class="section_padding blog">
        <div class="container">
            <div class="row">
                <div class="section_title text-center">
                    <p>Crew</p>
                    <h3>Artists</h3>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="blog-item">
                        <div class="part-img">
                            <!-- <img class="img-fliud" src=" "> -->
                            <div class="post-info-category">
                                <a href="#">Creative</a>
                            </div>
                        </div>

                        <div class="content">
                            <div class="title">
                                <h4><a href="#">Artist</a></h4>
                                <div class="meta">
                                    <span>Music Director</span>
                                </div>
                            </div>

                            <p>Devi Sri Prasad is a popularly known music director and Singer.
                               He is mostly called as D.S.P .
                            </p>
                            <div class="author">
                                <div class="author-img">
                                    <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Devi_sri_prasad.jpg">
                                </div>
                                <div class="text">
                                    <h5><a href="#">Devi Sri Prasad</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="blog-item">
                        <div class="part-img">
                            <!-- <img class="img-fliud" src=" "> -->
                            <div class="post-info-category">
                                <a href="#">Creative</a>
                            </div>
                        </div>

                        <div class="content">
                            <div class="title">
                                <h4><a href="#">Artist</a></h4>
                                <div class="meta">
                                    <span>Music Director/Singer</span>
                                </div>
                            </div>

                            <p>Anirudh Ravichandran is a youngest music director and singer.
                               His career was started from kollywood.
                            </p>
                            <div class="author">
                                <div class="author-img">
                                    <img class="img-fluid" src="https://i2.cinestaan.com/image-bank/1500-1500/146001-147000/146614.jpg">
                                </div>
                                <div class="text">
                                    <h5><a href="#">Anirudh Ravichander</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="blog-item">
                        <div class="part-img">
                            <!-- <img class="img-fliud" src=" "> -->
                            <div class="post-info-category">
                                <a href="#">Creative</a>
                            </div>
                        </div>

                        <div class="content">
                            <div class="title">
                                <h4><a href="#">Artist</a></h4>
                                <div class="meta">
                                    <span>Singer/Actress</span>
                                </div>
                            </div>

                            <p>Dhvani Bhanushali is popularly known singer in bollywood.
                               She also appeared in her own songs.
                            </p>
                            <div class="author">
                                <div class="author-img">
                                    <img class="img-fluid" src="https://in.bmscdn.com/Artist/dhvani-bhanushali-1268948-05-09-2019-06-07-13.jpg">
                                </div>
                                <div class="text">
                                    <h5><a href="#">Dhvani Bhanushali</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="hire_me section_padding text-center cover-bg">
        <div class="container">

            <h2>Music-E</h2>
            <a href="#" class="btn mt-30">Home</a>
        </div>
    </section>


    <section id="services" class="services section_padding">
        <div class="container">
            <div class="row">
                <div class="section_title text-center">
                    <p>Choose a song</p>
                    <h3>Songs</h3>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-15">
                    <!-- <div class="services_box box"> -->
                        <div class="player">
                            <div class="imgBx">
                                <img src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2019/09/mahesh-babu-1567769159.jpg">
                                <audio controls>
                                    <source src="Bharat Ane Nenu.mp3" type="audio/mp3">
                                </audio>
                            </div>
            
                        </div>
                        <div class="song_info">
                            <p>
                                <b>Title:</b> Bharat Ane Nenu <br>
                                <b>Song:</b> Bharat Ane Nenu
                            </p>
                        </div>
                    <!-- </div> -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-15">
                    <!-- <div class="services_box box"> -->
                        <div class="player">
                            <div class="imgBx">
                                <img src="https://s3.india.com/wp-content/uploads/2017/05/Sushant-Kriti.jpg">
                                <audio controls>
                                    <source src="Main Tera Boyfriend.mp3" type="audio/mp3">
                                </audio>
                            </div>
            
                        </div>
                        <div class="song_info">
                            <p>
                                <b>Title:</b> Raabta <br>
                                <b>Song:</b> Main Tera Boyfriend
                            </p>
                        </div>
                    <!-- </div> -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-15">
                    <!-- <div class="services_box box"> -->
                        <div class="player">
                            <div class="imgBx">
                                <img src="https://i.pinimg.com/564x/ef/da/ac/efdaac3ff4b3ec150a26ccd04886705f.jpg">
                                <audio controls>
                                    <source src="Leja Re.mp3" type="audio/mp3">
                                </audio>
                            </div>
            
                        </div>
                        <div class="song_info">
                            <p>
                                <b>Title:</b> Leja Re(Album) <br>
                                <b>Song:</b> Leja Re
                            </p>
                        </div>
                    <!-- </div> -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-15">
                    <!-- <div class="services_box box"> -->
                        <div class="player">
                            <div class="imgBx">
                                <img src="https://www.mirchi9.com/wp-content/uploads/2018/09/Care-Of-Kancharapalem-Review.jpg">
                                <audio controls>
                                    <source src="Asha Pasham.mp3" type="audio/mp3">
                                </audio>
                            </div>
            
                        </div>
                        <div class="song_info">
                            <p>
                                <b>Title:</b> C/o Kancharapalem <br>
                                <b>Song:</b> Asha Pasham
                            </p>
                        </div>
                    <!-- </div> -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-15">
                    <!-- <div class="services_box box"> -->
                        <div class="player">
                            <div class="imgBx">
                                <img src="https://keralakaumudi.com/web-news/en/2019/01/NMAN0023787/image/petta.1.98185.jpg">
                                <audio controls>
                                    <source src="Petta - Marana Mass.mp3" type="audio/mp3">
                                </audio>
                            </div>
            
                        </div>
                        <div class="song_info">
                            <p>
                                <b>Title:</b> Petta <br>
                                <b>Song:</b> Marana Mass
                            </p>
                        </div>
                    <!-- </div> -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-15">
                    <!-- <div class="services_box box"> -->
                        <div class="player">
                            <div class="imgBx">
                                <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201908/saaho2.jpeg?ltDERG5CqJr2P.YHojk_..YwWRIGn9GC">
                                <audio controls>
                                    <source src="Saaho Bang.mp3" type="audio/mp3">
                                </audio>
                            </div>
            
                        </div>
                        <div class="song_info">
                            <p>
                                <b>Title:</b> Saaho <br>
                                <b>Song:</b> Saaho Bang
                            </p>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>


    <section id="client" class="testimonial section_padding cover-bg">
        <div class="container">
            <div class="row">
                <div class="section_title text-center">
                    <p>What our clients say ?</p>
                    <h3>Testimonials</h3>
                </div>
                
                <div class="col-md-10 offset-md-1">
                    <div class="testimonials_items_main">
                        <div class="testimonial_item">
                            
                            <div class="icon mb-20">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            
                            <p>A wonderful serenity has taken possession of my entire
                            soul,like these songs which I enjoy with
                            my whole heart.</p>
                            
                            <div class="testimonial_author">
                                <div class="part-img">
                                    <!-- <img class="img-fluid" src="admin-img"> -->
                                </div>
                                <div class="text">
                                    <h5>Steve Smith</h5>
                                    <h6>Music-E</h6>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_item">
                            
                            <div class="icon mb-20">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            
                            <p>A much loved music website ever.</p>
                            
                            <div class="testimonial_author">
                                <div class="part-img">
                                    <!-- <img class="img-fluid" src=" "> -->
                                </div>
                                <div class="text">
                                    <h5>Varun</h5>
                                    <h6>Music-E</h6>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_item">
                            
                            <div class="icon mb-20">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            
                            <p>Music-E had made my heart a very power heart
                               driven.</p>
                            
                            <div class="testimonial_author">
                                <div class="part-img">
                                    <!-- <img class="img-fluid" src=" "> -->
                                </div>
                                <div class="text">
                                    <h5>Zaheer</h5>
                                    <h6>Music-E</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    


    <section id="about" class="about section_padding pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 section_title text-center">
                    <p>who am i</p>
                    <h3>about me</h3>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- <div class="part_photo">
                        <img class="img-fluid" src=" ">
                    </div> -->
                </div>
                <div class="part_text">
                    <h4 class="mb-30">Hi</h4>
                    <p class="pb-35">I'm MUSIC-E. I'm here to provide all types of songs
                                     which you liked to listen. I provides and recommends the
                                     music you mostly desires. I provides music of various 
                                     languages.
                    </p>

                    <div class="info mt-35">
                        <ul>
                            <li>
                                <span class="title"><strong>Name :</strong></span>
                                <span class="value"><strong>MUSIC-E</strong></span>
                            </li>
                            <li>
                                <span class="title"><strong>Address :</strong></span>
                                <span class="value"><strong>Vijayawada,Amaravati</strong></span>
                            </li>
                            <li>
                                <span class="title"><strong>E-MAIL :</strong></span>
                                <span class="value"><strong>info@music-e.com</strong></span>
                            </li>
                            <li>
                                <span class="title"><strong>Phone :</strong></span>
                                <span class="value"><strong>+919999999999</strong></span>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="btn mr-2">Download</a>
                    <a href="#" class="btn">Report</a>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="contact section_padding cover-bg">
        <div class="container">
            <div class="row">
                <div class="section_title text-center">
                    <p>GET IN TOUCH</p>
                    <h3>Contact</h3>
                </div>

                <div class="col-md-12">
                    <div class="part-info">

                        <div class="row">
                            <div class="col-md-4 xs-md-30">
                                <div class="info-block text-center">
                                    <div class="icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>

                                    <h5>My Location:</h5>
                                    <p>Vijayawada,Amaravati</p>
                                </div>
                            </div>

                            <div class="col-md-4 xs-md-30">
                                <div class="info-block text-center">
                                    <div class="icon">
                                        <i class="fa fa-mobile"></i>
                                    </div>

                                    <h5>Phone Number:</h5>
                                    <p>+919999999999</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="info-block text-center">
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>

                                    <h5>Email Address:</h5>
                                    <p>info@music-e.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="contact-form">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="required">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="required">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="required">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <textarea placeholder="Type Your Feedback" name="feedback" required="required"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <input type="submit" class="btn" value="Send Feedback">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
    <footer class="footer text-center">
        <div class="container">
            <div class="row">

                <div class="logo">
                    <a class="navbar-brand custom_logo" href="#"><span>MUSIC-E</span></a>
                </div>

                <div class="social_icon text-center">
                    <a href="https://www.facebook.com" target="blank"><span><i class="fa fa-facebook"></i></span></a>
                        <a href="https://www.twitter.com" target="blank"><span><i class="fa fa-twitter"></i></span></a>
                        <a href="https://www.linkedin.com" target="blank"><span><i class="fa fa-linkedin"></i></span></a>
                        <a href="https://www.instagram.com" target="blank"><span><i class="fa fa-instagram"></i></span></a>
                </div>

                <div class="copy">
                    <h6>&copy; 2020 designed by Venkatesh</h6>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
<script type="text/javascript" src="Website.js"></script>
</body>
</html>