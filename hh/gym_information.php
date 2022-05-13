<?php require("connection.php") ?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finess website</title>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--for replay icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--for review -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                    slidesPerGroup: 3,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                    slidesPerGroup: 1,
                },
                600: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },
                400: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },

            }
        });</script>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,600;0,700;1,100&family=Roboto:wght@100;300;400;500;700&display=swap');

        :root {
            --redclr: #F92524;
        }

        * {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            transition: all .2s linear;
            text-transform: capitalize;
            font-size: 16px;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
        }

        body {
            background: url("images/back7.jpg");
        }

        .home {
            padding: 2rem 7%;
        }

        .main-home {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .inner-home {
            flex: 1 1 45rem;
        }

            .inner-home img {
                width: 100%;
            }

        .home-content h2 {
            font-size: 30px;
            font-weight: lighter;
        }

        .home-content h1 {
            font-size: 35px;
        }

            .home-content h1 span {
                color: #9345B8;
                margin: 1rem 0;
            }

        .home-content p {
            font-size: 1.5rem;
            margin-top: 10px;
            margin-bottom: 25px;
        }

        .home-content a {
            padding: 1.5rem 3rem;
            background: var(--redclr);
            color: white;
            font-size: 1.5rem;
            border-radius: 15px;
        }

        .our-class {
            background: url(images/classbackground.png);
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            padding: 4rem 7%;
        }

            .our-class h1 {
                font-size: 40px;
                color: #9345B8;
                text-align: center;
                margin-bottom: 25px;
            }

        .swiper-slide img {
            width: 100%;
        }

        .swiper-slide {
            position: relative;
        }

            .swiper-slide:hover {
                transform: translateY(-20px);
            }

            .swiper-slide h2 {
                position: absolute;
                bottom: 0;
                color: white;
                background: #9345B8;
                width: 100%;
                padding: 1.5rem 0;
                font-size: 20px;
                text-align: center;
            }

        .our-story {
            padding: 3rem 7%;
            background: url(images/storybackground2.png);
            width: 100%;
            background-position: left;
            background-size: contain;
            background-repeat: no-repeat;
        }

            .our-story h1 {
                color: #9345B8;
                text-align: center;
                font-size: 40px;
                margin-bottom: 15px;
            }

        .ourstory-main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .ourstory-inner {
            flex: 1 1 45rem;
        }

            .ourstory-inner .story-front {
                width: 100%;
            }

            .ourstory-inner h2 {
                color: var(--redclr);
                font-size: 2rem;
            }

        .top-story-content {
            padding: 2rem .5rem;
        }

            .top-story-content p {
                font-size: 1.5rem;
                padding: 1.5rem 0;
            }

        .story-content {
            margin-left: 20px;
        }

        .our-trainers {
            padding: 3rem 7%;
        }

            .our-trainers h1 {
                color: #9345B8;
                font-size: 40px;
                text-align: center;
                margin-bottom: 20px;
            }

        .main-trainer {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 0;
        }

        .inner-trainer {
            flex: 1 1 300px;
        }

            .inner-trainer img {
                width: 100%;
                transform: scale(1);
            }

                .inner-trainer img:hover {
                    transform: translateY(-20px);
                }

        .trainer-content {
            padding: 0 2rem;
        }

            .trainer-content h2 {
                color: #9345B8;
                font-size: 30px;
                margin-bottom: 5px;
            }

            .trainer-content span {
                color: black;
                font-size: 1.5rem;
                padding: 15px 0;
            }

            .trainer-content hr {
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .trainer-content p {
                font-size: 1.5rem;
            }

        .social-icons i {
            font-size: 2rem;
            color: black;
            padding: 1rem;
            margin: 1rem;
        }

            .social-icons i:hover {
                color: var(--redclr);
                cursor: pointer;
                transform: rotate(360deg) scale(2);
            }

        .customer-review {
            padding: 5rem 7%;
        }

            .customer-review h1 {
                color: #9345B8;
                font-size: 40px;
                text-align: center;
                margin-bottom: 50px;
            }

        .main-customer {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .inner-customer {
            flex: 1 1 300px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            padding: 3rem 1rem;
            position: relative;
        }

            .inner-customer:hover {
                border-radius: 10px;
                box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            }

            .inner-customer img {
                position: absolute;
                top: -15%;
                width: 70px;
            }

        .review-icons {
            padding: 1rem 0;
            margin-top: 15px;
        }

        .main-customer {
            background: #ffffff;
        }



        .review-icons i {
            color: yellow;
            font-size: 18px;
        }

        .inner-customer p {
            font-size: 1.5rem;
            padding: 1.5rem .5rem;
        }









        @media (max-width:991px) {
            .home {
                margin-top: 70px;
            }
        }


        @media (max-width:767px) {
            html {
                font-size: 50%;
            }


            .home {
                margin-top: 70px;
            }

            .story-content h2 {
                color: black;
            }

            .top-story-content p {
                padding: 0 2rem;
            }

            .inner-customer {
                margin-top: 15px;
                padding: 4rem 4rem;
            }
        }
    </style>
</head>
<body>

    <!---header ------>
    <header>

        <style>

            header {
                display: flex;
                font-size: 1em;
                flex-wrap: wrap;
            }

            img {
                width: 100%;
                padding: 10px;
                background-color: var(--bg-color-4);
            }

            header img {
                float: left;
                width: 180px;
                height: 180px;
                border: none;
                background-color: revert;
            }

            nav {
                display: flex;
                font-size: 1em;
                flex-wrap: wrap;
                width: 100%;
            }

                nav.topnav {
                    overflow: hidden;
                    background: url("images/back7.jpg");
                }

                nav .links {
                    display: flex;
                    align-items: center;
                    font-weight: bold;
                    text-transform: uppercase;
                    flex-wrap: wrap;
                }

                nav.topnav a {
                    color: #9345B8;
                    padding: 14px 16px;
                }

                    nav.topnav a:hover {
                        background-color: #737373;
                        color: white;
                    }




            .search-form {
                margin-top: 8px;
                margin-left: auto;
                margin-right: 20px;
            }


            input[type="text"] {
                padding: 7px;
                border: none;
                font-size: 1em;
                font-family: sans-serif;
            }
        </style>
        <nav class="topnav">
            <img
          class="logo"
          src="images/logo3.png"
          alt="restaurants logo"
        />


            <div class="links">
              <a href="index.php">HOME</a>

              <a href="#footer">Contact-Us</a>
            </div>

          </nav>
    </header>


    <!-- home section -->

    <div class="home">
        <div class="main-home">
            <div class="inner-home">
                <div class="home-content">
                    <h2>overview</h2>
                    <h2>build your body &</h2>
                    <h1>shape <span>yourself</span> </h1>
                    <p>
          <?php
          $gymId=$_GET['id'];
          $q2 ='select * from gym_info where id='.$gymId.'';
$run = mysqli_query($db, $q2);
while ($row=mysqli_fetch_array($run)) {
  echo $row['name'].$row['description'];


          ?>
                    </p>
                    <a href="<?php echo $row['subscribe'] ;?>">subscribe</a>
                </div>

            </div>
            <div class="inner-home">
                <img src="<?php echo $row['photo'];?>" alt="">
            </div>
        </div>
    </div>

    <div class="our-class">
        <h1>classes</h1>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/class1.png" alt="">
                    <h2>body building</h2>
                </div>
                <div class="swiper-slide">
                    <img src="images/class2.png" alt="">
                    <h2>swimming</h2>
                </div>
                <div class="swiper-slide">
                    <img src="images/class4.png" alt="">
                    <h2>boxing</h2>
                </div>
                <div class="swiper-slide">
                    <img src="images/class2.png" alt="">
                    <h2>swimming</h2>
                </div>
                <div class="swiper-slide">
                    <img src="images/class1.png" alt="">
                    <h2>body building</h2>
                </div>
                <div class="swiper-slide">
                    <img src="images/class4.png" alt="">
                    <h2>boxing</h2>
                </div>
                <div class="swiper-slide">
                    <img src="images/class1.png" alt="">
                    <h2>body building</h2>
                </div>
                <div class="swiper-slide">
                    <img src="images/class2.png" alt="">
                    <h2>swimming</h2>
                </div>
                <div class="swiper-slide">
                    <img src="images/class4.png" alt="">
                    <h2>boxing</h2>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- our stories GOOGLE MAP-->
    <div class="our-story">
        <h1>gym location</h1>
        <div class="ourstory-main">
            <div class="ourstory-inner">
                <img class="story-front" src="images/storyfront.png" alt="">
            </div>

            <div class="ourstory-inner">
                <div class="top-story-content">
                    <h2>address</h2>
                    <p>
<?php echo $row['loc']; ?>                    </p>
                </div>

                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="<?php echo $row['location'];}?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 600px;
                    }
                </style><a href="https://www.embedgooglemap.net">google maps on website</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 600px;
                    }
                </style></div></div>

            </div>
        </div>

    </div>



    <!-- our trainers -->
    <div class="our-trainers">
        <h1>our trainers</h1>

        <div class="main-trainer">
            <div class="inner-trainer">
                <img src="images/train1.png" alt="">
            </div>

            <div class="inner-trainer">
                <div class="trainer-content">
                    <h2>Trainers</h2>
                    <span>our builders</span>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, dolorem ipsum odio minima iste enim quibusdam error vero quia voluptate accusamus cupiditate, mollitia, dolorum est deleniti nihil fugit ipsam expedita?</p>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="inner-trainer">
                <img src="images/train2.png" alt="">
            </div>

            <div class="inner-trainer">
                <div class="trainer-content">
                    <h2>Trainers</h2>
                    <span>our builders</span>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, dolorem ipsum odio minima iste enim quibusdam error vero quia voluptate accusamus cupiditate, mollitia, dolorum est deleniti nihil fugit ipsam expedita?</p>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>
            <div class="inner-trainer">
                <img src="images/train3.png" alt="">
            </div>
            <div class="inner-trainer">
                <div class="trainer-content">
                    <h2>Trainers</h2>
                    <span>our builders</span>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, dolorem ipsum odio minima iste enim quibusdam error vero quia voluptate accusamus cupiditate, mollitia, dolorum est deleniti nihil fugit ipsam expedita?</p>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <!--review-->
  <script src="script.js"></script>
    <div class="container">
  <h1 class="mt-5 mb-5">Reviews</h1>
  <div class="card">
    <div class="card-header">write and rate the gym</div>
    <div class="card-body">
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
<?php
	$gym_id= $_GET['id'];
	$query1 = "SELECT * FROM rev WHERE gym_id=$gym_id ORDER BY user_rating DESC";

	$result1 = mysqli_query($db, $query1);
	$count = mysqli_num_rows($result1);
	if($count == 0) {
		echo '<div class="alert alert-danger " role="alert" style="margin:10px auto;text-align:center">';
			echo "<p>No Reviews</p>";
		echo '</div>';

	} else {
	   while($row1 = mysqli_fetch_array($result1)) {
?>
          <div class="media img-thumbnail" style="background-color:#fff; padding:10px; margin:10px">
              <img class="mr-3" src="imgs/user.png" alt="user image" style='height:100px; width:100px; border-radius:20px;'>
              <div class="media-body">
                <h5 class="mt-0"><?php echo $row1['user_name'] ?> <span class="text-muted pull-right"><i class="fas fa-calendar"></i> <?php echo $row1['datetime'] ?> </span></h5>
                <?php
                    if( $row1['user_rating'] == 1) {
                        echo '<i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i>';
                    } else if( $row1['user_rating'] == 2) {
                        echo '<i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i>';
                    }else if( $row1['user_rating'] == 3) {
                        echo '<i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i>';
                    }else if( $row1['user_rating'] == 4) {
                        echo '<i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i>';
                    }else if( $row1['user_rating'] == 5) {
                        echo '<i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i><i class="fas fa-star fa-star1 mr-1 text-warning" data-rating="1"></i>';
                    }

                  ?>
                <h3></h3>
                <blockquote><?php echo $row1['user_review'] ?></blockquote>

              </div>
        </div>
<?php
        }
    }
?>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5" id="review_content"></div>
  </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                    slidesPerGroup: 3,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                    slidesPerGroup: 1,
                },
                600: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },
                400: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },

            }
        });</script>
<style>
    footer{
  bottom: 0;
  left: 0;
  right: 0;
  background: #111;
  height: auto;
  width: 100vw;
  padding-top: 40px;
  color: #fff;

}
.footer-content{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
}
.footer-content h3{
  font-size: 2.1rem;
  font-weight: 500;
  text-transform: capitalize;
  line-height: 3rem;
}
.footer-content p{
  max-width: 500px;
  margin: 10px auto;
  line-height: 28px;
  font-size: 14px;
  color: #cacdd2;
}
.socials{
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 1rem 0 3rem 0;
}

.socials li{
  margin: 0 10px;
}

.socials a{
  text-decoration: none;
  color: #fff;
  border: 1.1px solid white;
  padding: 5px;
  border-radius: 50%;
}

.socials a i{
  font-size: 1.1rem;
  width: 20px;
  transition: color .4s ease;
}

.socials a:hover i{
  color: aqua;
}
.footer-bottom{
  background: #000;
  width: 100vw;
  padding: 20px;
  padding-bottom: 40px;
  text-align: center;
}
.footer-bottom p{
  float: left;
  font-size: 14px;
  word-spacing: 2px;
  text-transform: capitalize;
}
.footer-bottom p a{
 color:#44bae8;
 font-size: 16px;
 text-decoration: none;
}
.footer-bottom span{
   text-transform: uppercase;
   opacity: .4;
   font-weight: 200;
}

</style>

<style>
    footer{
  bottom: 0;
  left: 0;
  right: 0;
  background: #111;
  height: auto;
  width: 100vw;
  padding-top: 40px;
  color: #fff;

}
.footer-content{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
}
.footer-content h3{
  font-size: 2.1rem;
  font-weight: 500;
  text-transform: capitalize;
  line-height: 3rem;
}
.footer-content p{
  max-width: 500px;
  margin: 10px auto;
  line-height: 28px;
  font-size: 14px;
  color: #cacdd2;
}
.socials{
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 1rem 0 3rem 0;
}

.socials li{
  margin: 0 10px;
}

.socials a{
  text-decoration: none;
  color: #fff;
  border: 1.1px solid white;
  padding: 5px;
  border-radius: 50%;
}

.socials a i{
  font-size: 1.1rem;
  width: 20px;
  transition: color .4s ease;
}

.socials a:hover i{
  color: aqua;
}
.footer-bottom{
  background: #000;
  width: 100vw;
  padding: 20px;
  padding-bottom: 40px;
  text-align: center;
}
.footer-bottom p{
  float: left;
  font-size: 14px;
  word-spacing: 2px;
  text-transform: capitalize;
}
.footer-bottom p a{
 color:#44bae8;
 font-size: 16px;
 text-decoration: none;
}
.footer-bottom span{
   text-transform: uppercase;
   opacity: .4;
   font-weight: 200;
}

</style>

<div class="reviews">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="well" style="background-color:#FFF; padding:20px 10px;margin-bottom:20px;">
                    <script>

                    function checkData() {
                        var rating = $("#rate").val();
                        if(rating == 0) {
                             alert("please select your rating");
                            return false;
                        }

                        return true;
                    }
                    function setRate(r) {
                        $("#rate").val(r);

                    }
                    </script>
                <form method="post" onsubmit="return checkData()" action="saveRating.php">
                        <h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star fa-star1 star-light submit_star mr-1" id="submit_star_1" data-rating="1" onclick="setRate(1)"></i>
                    <i class="fas fa-star fa-star1 star-light submit_star mr-1" id="submit_star_2" data-rating="2" onclick="setRate(2)"></i>
                    <i class="fas fa-star fa-star1 star-light submit_star mr-1" id="submit_star_3" data-rating="3" onclick="setRate(3)"></i>
                    <i class="fas fa-star fa-star1 star-light submit_star mr-1" id="submit_star_4" data-rating="4" onclick="setRate(4)"></i>
                    <i class="fas fa-star fa-star1 star-light submit_star mr-1" id="submit_star_5" data-rating="5" onclick="setRate(5)"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Name" required />
	        		<input type="hidden" value="0" required name="rate" id="rate" class="form-control"  />
	        		<input type="hidden" value="<?php echo $_GET['id']; ?>" required name="gym_id" id="gym_id" class="form-control"  />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here" required rows="5"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="submit" class="btn btn-primary" name="save_review" id="save_review">Submit</button>
	        	</div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

<footer id="footer">

    <div class="footer-content">
      <h3>Contact Us</h3>
      <p> Feel free to contact us if you encounter any problems, whether it's a technical malfunction or confusion about the displayed information</p>
      <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
     </ul>
     <div class="footer-bottom">
      <p>copyright &copy;2022 <a href="#">DO IT</a>  </p>

   </div>
    </div>

</footer>

</body>
</html>

<!--new code review-->


<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}

    .fa-star1 {
        font-size: 30px;
    }
</style>
