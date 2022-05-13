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
<style>
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
</style>
    </head>
    <body >
 
<?php
   
if(isset($_POST['save_review'])) {
    $username  = $_POST['username'];
    $rate  = $_POST['rate'];
    $user_review  = $_POST['user_review'];
    $gym_id  = $_POST['gym_id'];
    
    $q = "INSERT INTO rev VALUES(NULL,'$username',$rate,'$user_review',NOW(), $gym_id)";

    $res = mysqli_query($db,$q);

    if($res) {

        echo '<div class="alert alert-success text-center" role="alert" style="margin:10px auto;">';
        echo "<span>Your Review Has Been Saved. </span><br>";

        echo '</div>';
        echo '<meta http-equiv="refresh" content="1;url=gym_information.php?id=' . $gym_id .'" />';	

        exit();
    }
}
?>   
    </body>
    
</html>