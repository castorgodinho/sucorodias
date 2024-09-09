
<!doctype html>
<html lang="en">

<head>
    <title>Sucoro Dias</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-custom">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" height="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto w-100  justify-content-end ">
                <li class="nav-item active">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="photo.html">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="videos.html">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Me</a>
                </li>
            </ul>
        </div>
    </nav>
<?php

if(isset($_POST) && sizeof($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['query'];
    $msg = "Name: ".$name ."\nEmail: ".$email ."\nQuery: ".$query;

    if($name == "" || $email== "" ||  $query== ""){
    	echo "<div class='feedback-msg alert alert-danger alert-dismissible' style='margin-top: 90px; margin-left: 30px; margin-right: 30px' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Error. Something went wrong. Please try again after sometime!</div>";
    }else{
	    //mail("diassucor@outlook.com","Query Recived from the website",$msg);
	    echo "<div class='feedback-msg alert alert-success alert-dismissible' style='margin-top: 90px; margin-left: 30px; margin-right: 30px' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Successful. We will get back to your query as soon as possible.</div>";
    }
    
}

?>
    <div class="container introduction" id="home">
        <div class="row">
            <div class="col-md-4 brand-1">
                <img src="img/succor.jpg" class="img-fluid dp" alt="">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md text-center brand-2" style="margin-top: 10px">
                <img src="img/logo.png " height="70" class=" text-center" alt="">
                <!-- <h1 class="text-shadow">Sucoro Dais</h1> -->
                <p>With me as your MC you will enjoy a wedding reception that will be remembered for all the right reason. Being
                    an experienced professional MC and as such is proud to have hosted a wide variety of engagements from weddings to conferences and International shows to T.V. shows. I have also worked for T.V. as a news
                    anchor, so you can be assured that your guest will love the voice they are listening too. Being a talented
                    and engaging Goan wedding MC, the warmth, humor an energy will always create a memorable, intimate and
                    entertaining reception for you and your guests.
                </p>
            </div>
        </div>
    </div>

    <div id="services" class=" services text-center">
        <h1 class="text-center heading service-2">Services</h1>
        <div class="separator service-2"></div>
        <p class="service-2">I have learned that if one advances confidently in the direction of his dreams, and endeavors to live the life he
            has imagined, he will meet with a success unexpected in common hours. We only live once, whether I’m compering
            or not as long as I live I wish to leave a lasting impression on people’s life whoever comes across.</p>

        <div class="row">
            <div class="col-md service-1">
                <img src="img/Party_Hat.png" class="img-fluid" alt="">
                <p>Parties</p>
            </div>
            <div class="col-md service-1">
                <img src="img/rings.png" class="img-fluid" alt="">
                <p>Weddings</p>
            </div>
            <div class="col-md service-1">
                <img src="img/christmas.png" class="img-fluid" alt="">
                <p>Chirstmas Celebration</p>
            </div>
            <div class="col-md service-1">
                <img src="img/events.png" class="img-fluid" alt="">
                <p>Events</p>
            </div>
            <div class="col-md service-1">
                <img src="img/com.png" class="img-fluid" alt="">
                <p>Comunion</p>
            </div>
        </div>
    </div>

    <div id="testimonials" class="container testimonials text-center">
        <h1 class="text-center heading testimonial-2">Testimonials</h1>
        <div class="separator testimonial-2"></div>
        <div class="row">
            <div class="col-md testimonial-1">
                <img src="img/dp1.jpg" class="" alt="">
                <p>"Hey Sucor I remember I hd written a testimonial for u wen I was a bachelor...n now m married...well I feel
                    lucky dat Ive got to know u. descent, discipline and gentleman... Cheers to u n God Bless you and your
                    family with lots of love and happiness.."
                    <b> - Vilson Lourdes Pinto</b>
                </p>
            </div>
            <div class="col-md testimonial-1">
                <img src="img/dp2.jpg" alt="">
                <p>"hey people wat more can I say abt dis wonderful person. I ve been 10yrs into music and known many ppl in
                    dis entertainment industry in Goa bt believe me Sucor is one of the best person to get along. a true
                    gentlemen and above all a nice human being which is very impt. Best of Luck."
                    <b>- Vilson Pinto </b>
                </p>
            </div>
            <div class="col-md testimonial-1">
                <img src="img/dp3.jpg" alt="">
                <p>"Working with you for four years and knowing you for almost for 11 years sucor you were so helpful,caring
                    and a loving friend.you are a very hard working and talented. Thanks for making my wedding a memorable
                    one."
                    <b>- Frasly Diniz</b>

                </p>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md testimonial-1">
                <img src="img/dp7.jpg" class="" alt="">
                <p>"
                    Thank you for making our wedding a great one. We were honestly very concerned about how
                     the whole reception will flow and we were very happy with the outcome. Everyone enjoyed
                      the wedding. The whole reception flowed smoothly and I got so many people telling me
                       that the wedding was really fun. You were great as an Emcee and there was never a
                        moment of uncomfortable silence. You're such an awesome entertainer. We still continue
                         to hear great comments about
                     our wedding and it's thanks to you. You definitely made it a fun and memorable night"
                    <b> - Roland D'Souza</b>
                </p>
            </div>
            <div class="col-md testimonial-1">
                <img src="img/dp5.jpg" alt="">
                <p>"Hey Sucoro, Congratulations this young man is a personal friend of mine .very good human being ,good at
                    heart and mind ,knows the word RESPECT for others. Being in the industry he is Good at his work very
                    dedicated. I wish him loads of Gods blessings. CHEERS"
                    <b>- Slylaster Fernandes</b>
                </p>
            </div>
            
        </div>
    </div>

    <div id="contact" class=" contact">
        <h1 class="text-center heading">Contact Me</h1>
        <div class="separator"></div>
        <div class="row">
            <div class="col-md">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text ">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">What is your query??</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="query"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Contact</button>
                </form>
            </div>
            <div class="col-md ">
                <div class="row text-center social">
                    <div class="col-md-1">
                        <a href="https://www.facebook.com/sucoro.dias" target="_blank">
                            <img src="img/fb.png" width="45" alt="">
                        </a>
                    </div>
                    <!-- <div class="col-md-1">
                        <a href="">
                            <img src="img/insta.png" width="47" alt="">
                        </a>
                    </div> -->
                </div>
                <p>Address: Navelim, Goa</p>
                <p>Personal Number: +(91): 9822159832</p>
                <p>Email: diassucor@outlook.com</p>

            </div>
        </div>
    </div>

    <div class="text-center footer">
        <p>Designed and Developed by
            <a target="_blank" href="http://www.fossclubgoa.com">Chowgule FOSS Club</a>
        </p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    <script src="js/jquery.smoothscroll.min.js"></script>
    <script src="js/reveal.js"></script>
    <script>
        $('document').ready(function () {
            $('html').smoothScroll(1000);
            window.sr = ScrollReveal({ reset: false });
            sr.reveal('.service-1', { duration: 2000, delay: 400 }, 50);
            sr.reveal('.service-2', {
                delay: 300,
                duration: 1000
            });

            sr.reveal('.testimonial-1', { duration: 2000, delay: 400 }, 50);
            sr.reveal('.testimonial-2', {
                delay: 300,
                duration: 1000
            });

            /*sr.reveal('.brand-1',{
                duration: 800
            });
            sr.reveal('.brand-2',{
                duration: 800,
                delay: 500
            });*/
            setTimeout(function() {
                $('.feedback-msg').fadeOut('fast');
            }, 6000);
        });

    </script>
</body>

</html>