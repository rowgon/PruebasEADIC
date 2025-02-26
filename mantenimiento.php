<!doctype html>
<html lang="en">
<?php 
if(empty($_GET['Temp'])){
  }
else{
require_once ($_SERVER['DOCUMENT_ROOT']."/WAdmin/Config/Usuario_Class.php");
$temp=$_GET['Temp'];
$Usuario = new Usuario();
$ver=$Usuario->ValidarTempUsuario($temp);
}



 ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>e-trainING Pills </title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
<style>
*, *:before, *:after {
  box-sizing: border-box;
}

html {
  overflow-y: scroll;
}


a {
  text-decoration: none;
  color: black;
  transition: .5s ease;
}
a:hover {
  color: #179b77;
}


.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 1%;
  font-size: 14px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #0c2e60;
  color: #ffffff;
}
.tab-group .active a {
   background: #0c2e60;
  color: #ffffff;
}

.tab-content > div:last-child {
  display: none;
}

input:focus, textarea:focus {
  outline: 0;
  border-color: #1ab188;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
 
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #179b77;
}

.button-block {
  display: block;
  width: 100%;
}

#cajas{

    border-radius: 7px;
    border-width: 1px;
    border-style: groove;
    padding: 5%;
    border-color: #dcdcdc;

}

</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    <!--::header part start::-->
   <?php 
   include 'menu.php'; 



   ?>
  
    <!-- Header part end-->
<section class="course_details_area" id="course_details_area" style="">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12">
				<div>
					<h1>Pagina en Mantenimiento</h1>
					<p style="color: grey; font-size: 18px;" >Pronto volveremos</p>
				</div>
			</div>
		</div>
	</div>
</section>


 
</body>

</html>
