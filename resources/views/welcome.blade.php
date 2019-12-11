<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">









        <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
		 <link rel="stylesheet" type="text/css" href="register.css">
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
         <link rel="stylesheet" type="text/css" href="register.css">
	  <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 









        <title>MOBILE WEBSITE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>





        /* Style the navigation menu */
.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
 
}


/* Hide the links inside the navigation menu (except for logo/home) */
.topnav #myLinks {
  display: none;
}

/* Style navigation menu links */
.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 19px;
  display: block;
}

/* Style the hamburger menu */
.topnav a.icon {
  background: pink;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

/* Add a grey background color on mouse-over */
.topnav a:hover {
  color: white;
  background-color:grey;
}

/* Style the active link (or home/logo) */
.active {
  background-color: #63D6E0;
  color: white;
}



 html, body {
  height: 100%;
  margin:0px;
  background-image:url( {{asset("/images/ktj.jpg")}});
  background-repeat: no-repeat;
background-position:center;
  background-size: cover;
font-family:calibri;
            }

            	
.card{
	max-height:20%;
  
	z-index:+1;
}
.card {
    background-color: #FFFFFF;
    padding: 20px 0;
    width: 92%;
    border-radius: 6px;
    color: rgba(0,0,0, 0.87);
    background: #FEF;
    position:absolute;
    /* text-align:center; */
}

            /*.full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */
            
.text{
	color: white;
  text-shadow: 2px 2px 4px #000000;
 padding-left:20%;
}	






        </style>
    </head>
    <body>


<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#home" class="active">KSHITIJ</a>
  <!-- Navigation links (hidden by default) -->
  <div id="myLinks">
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About Us</a>
    <a href="#about">About Us</a>
    <a href="#about">About Us</a>
    <a href="#about">About Us</a>
    <a href="#about">About Us</a>
    <a href="#about">About Us</a>
    <a href="#about">Sponsors</a>

    <a href="#about">Sponsors</a>
    <a href="#about">Sponsors</a>
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>






<section class = "container section"> 
   
<div class = "row">
   	
         <div class = "col s9 l3 ">
<div class="card">
		
	<h3><span class="text">Notifications</span></h3>
       
</div>
      </div> 
	  </div>
	  </section>





<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
    </body>
</html>
