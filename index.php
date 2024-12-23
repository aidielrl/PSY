<!DOCTYPE html>
<html>
<title>PSY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/welcomePage.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree:wght@600&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">

<style>
@keyframes animate-text {
  0% {
    opacity: 0;
    transform: translateY(-100%);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-text {
  animation: animate-text 2s ease-in-out;
  opacity: 1;
  transform: translateY(0);
  animation-fill-mode: forwards;
}

.container {
  position: relative;
}

.logo {
  position: center;
  top: 0;
  left: 0;
  width: 100px;
  height: 100px;
  margin-bottom: 1em;
}

html
{
  scroll-behavior: smooth;
}
h2 {
  font-family: 'Figtree', sans-serif;font-size: 32px;
}
h1 {
color: #7BD8A4;
text-shadow: 2px 2px #48CA6A;
font-family: 'Comfortaa', cursive;
font-size: 40px;
font-weight: bold;
margin-top: 0px;
margin-bottom: 1px;
}
a{
  text-decoration: none;
}
</style>

<body>
  <section id="container">
        <br>
        <br>
        <section>
<!-- USER CONTAINER -->
<center>
<img src="img/logoHTI.png" alt="Logo" class="logo">
  <h1 class="animate-text">PSY APPOINTMENT SYSTEM</h1>
  <br>
        <br>
        <a href="user/login.php"> <!------- FOR PATIENT TO LOGIN  ------>
          <img src="img/doctor.PNG" alt=user width=150px height=150px>
          <h2><b>PESAKIT</b></h2>
        </a>
        
        </br>
        <br>
        <a href="IndexStaff.php"> <!------- FOR STAFF AND ADMIN TO LOGIN  ------>
          <img src="img/staff.PNG" alt=user width=150px height=150px>
          <h2><b>STAFF</b></h2>
        </a>
        </br>
        <br>
        <!-------
        <a href="IndexAdmin.php">
          <img src="img/admin.PNG" alt=user width=150px height=150px>
          <h1><b>ADMIN</b></h1>
        </a>
        </br> ------>
  </br>

        
      </center>
</section>
</section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/bgtest6.jpg", {
      speed: 500
    });
  </script>
</body>
</html>