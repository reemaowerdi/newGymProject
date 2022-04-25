<!DOCTYPE html>

<html lang="en" class="default-theme">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .checked {
  color: orange;
}
      * {box-sizing: border-box}
      body {font-family: Verdana, sans-serif; margin:0}
      .mySlides {display: none}
      img {vertical-align: middle;
      }

      /* Slideshow container */
      .slideshow-container {
        width: 100%;


      box-shadow: 1px 2px 2px white;
        position: relative;
        margin: auto;
        background-size: 100% 100%;
      }

      /* Next & previous buttons */
      .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
      }
.container-content {
  background-color: "black";
  display: flex;
}
      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active, .dot:hover {
        background-color: #717171;
      }

      /* Fading animation */
      .fade {
        animation-name: fade;
        animation-duration: 1.5s;
      }

      @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
      }

      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
      }
      </style>
    <title>DO IT-review site</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>

    <header>


      <nav class="topnav">
        <img
      class="logo"
      src="images/logo3.png"
      alt="restaurants logo"
    />


        <div class="links">
          <a href="home.html">HOME</a>
          <a href="#about">About-US</a>
          <a href="#footer">Contact-Us</a>
        </div>

      </nav>
    </header>

    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/image7.jpg" style="width:100%">

      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/doimg.jpg" style="width:100%">
      </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/image20.jpg" style="width:100%">

      </div>



      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
      <a class="next" onclick="plusSlides(2)">❯</a>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>

      </div>

      <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 4000); // Change image every 4 seconds
        }
        </script>


    <main>
      <div class="main">




        <h2 style="color:#6D089D">Search:</h2>
        <br>
        <div id="myBtnContainer">

          <button class="btn active" onclick="filterSelection('all')"> Show all</button>
          <button class="btn" onclick="filterSelection('north')"> north</button>
          <button class="btn" onclick="filterSelection('West')"> West</button>
          <button class="btn" onclick="filterSelection('east')"> east</button>
          <button class="btn" onclick="filterSelection('south')"> south</button>
         <button class="sort">Top Rated</button>
        </div>
        <hr>

        <!-- Portfolio Gallery Grid -->







<div class="container-content">
            <?php
            global $db;
          	$server = 'localhost';
          	$user = 'root';
          	$pass = 'root';
          	$dbname = 'doit';
          	$db = mysqli_connect($server,$user,$pass,$dbname);
          	if(!$db) {
          		exit("connection string failed");
          	}
                $q ='select * from gym_info';
          $run = mysqli_query($db, $q);

            while($rec = mysqli_fetch_array($run)) {
echo '<div class="content">';
              echo  '<img src="'.$rec['photo'].'" alt="Car" style="width:100%"><hr>';
              echo      '<p class="table-name">'.$rec["name"].' </p>';
                echo ' <h2> Rating:</h2>';
    echo ' <span class="fa fa-star checked"></span>';
    echo  '<span class="fa fa-star checked"></span>';
  echo    '<span class="fa fa-star checked"></span>';
    echo  '<span class="fa fa-star"></span>';
  echo   ' <span class="fa fa-star"></span>';

      echo        '    <p class="table-loc">LOCATION:'.$rec['loc'].'</p><br>';
              echo   ' <button class="BOOK"onclick="window.location.href="gym_information.php?id='.$rec[id].'>';
          echo     '  view details  </button>';
echo '</div>';

        }?>
</div>
        <!-- END GRID -->
        </div>

        <!-- END MAIN -->
        </div>

        <script>
          filterSelection("all")
          function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
              w3RemoveClass(x[i], "show");
              if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
          }

          function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
              if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
            }
          }

          function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
              while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
              }
            }
            element.className = arr1.join(" ");
          }


          // Add active class to the current button (highlight it)
          var btnContainer = document.getElementById("myBtnContainer");
          var btns = btnContainer.getElementsByClassName("btn");
          for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function(){
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
            });
          }
          </script>

<br> <br> <br>
<div id="about">
      <div class="container">

        <div class="left">
          <img src="images/banner.png">
        </div>
        <div class="right">
          <h2 class="about">About Us</h2>
          <p>we are</p>
        <h1> DO IT review-site</h1>
        <p>we provide gyms with options that depend on your needs.
          we will save your valuable time and help you find better options. .</p>

        </div>
      </div>



    </main>






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
          <button style="color: black;" onclick="window.location.href='signuplogin.html'">admin</button>
          <p>copyright &copy;2022 <a href="#">DO IT</a>  </p>

       </div>
        </div>

    </footer>
  </body>

</html>
