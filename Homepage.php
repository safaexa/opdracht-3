<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"rel="stylesheet"><link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tandarts Pink</title>
</head>
<body>
    <div class="header">
        <nav>

        <div class="logo">
            <a href="Homepage.php"><img src="images/logo.png"></a>
        </div>

        <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li>
        <a href="Homepage.php">HOME</a>
        <a href="AboutUs.php">ABOUT US</a>
        <a href="Before.php">BEFORE AND AFTER</a>
        <a href="leeromgeving.php">LEARN MORE</a>
        <a href="contact.php">CONTACT US</a>
        </li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
             


       
             
            <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="klantlogin.php">Tandarts</a></li>
                    <li><a class="dropdown-item" href="klantlogin.php">Patient</a></li>
                </ul>
            </div>

        </nav>

        <div class="text-box">
            <h1>Welkom bij tandartspraktijk .......</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure harum quidem tenetur molestiae 
                velit eos nulla laboriosam id qui?<br> Fugit quia illum deserunt expedita eius sapiente dolorum autem eligendi sed.</p>
                <a href="" class="hero-btn">Maak een afspraak</a>
        </div>


    </div>
<!------------------------------------------------------->

   <section class="behandeling">
       <h1>Behandelingen die we aanbieden</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis esse illum?</p>

         <div class="row">
            <div class="behandeling-col">
                <h3>Tandartsreiniging</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem dicta ipsum, molestiae iusto obcaecati officia itaque eius qui consectetur, 
                    placeat atque cumque eligendi, ab vel? Est, neque! Porro, quam odit.</p>
            </div>

            <div class="behandeling-col">
                <h3>vullen van gaatjes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem dicta ipsum, molestiae iusto obcaecati officia itaque eius qui consectetur, 
                    placeat atque cumque eligendi, ab vel? Est, neque! Porro, quam odit.</p>
            </div>

            <div class="behandeling-col">
                <h3>wortelkanaalbehandeling</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem dicta ipsum, molestiae iusto obcaecati officia itaque eius qui consectetur, 
                    placeat atque cumque eligendi, ab vel? Est, neque! Porro, quam odit.</p>
            </div>
         </div>
   </section>
<!---------------------------------------------------------->

<!---------------------------------------------------------->

   <section class="location">
        <h1>Onze locaties</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis esse illum?</p>


        <div class="row">
            <div class="location-col">
                <img src="images/Location1.jpg">
                <div class="layer">
                    <h3>AMSTERDAM WEST</h3>
                </div>
            </div>
   

       <div class="location-col">
                <img src="images/Location2.jpg">
                <div class="layer">
                    <h3>AMSTERDAM OOST</h3>
                </div>
            </div>
        

        <div class="location-col">
                <img src="images/Location3.jpg">
                <div class="layer">
                    <h3>AMSTERDAM NOORD</h3>
                </div>
            </div>
        </div>
   </section>


<!---------------------------------------------------------->

<!----------------------------------------------------------->

<section class="review">
        <h1>Revieuw van klanten</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis esse illum?</p>

         <div class="row">
            <div class="review-col">
                <img src="images/user1.jpg">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eveniet et consectetur suscipit recusandae placeat iure, velit eos provident expedita odit ipsam,
                        quae nisi. Illo, dolores. Ipsum ipsam veritatis iste. Odio. </p>
                    <h3>Anna van de vlissingen</h3>
                    <i class="fa fa-star"></i>                   
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
            </div>

            <div class="review-col">
                <img src="images/user2.jpg">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eveniet et consectetur suscipit recusandae placeat iure, velit eos provident expedita odit ipsam,
                        quae nisi. Illo, dolores. Ipsum ipsam veritatis iste. Odio. </p>
                    <h3>Robin hengelen </h3>
                    <i class="fa fa-star"></i>                   
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
         </div>
</section>

<!------------------------------------------------------------>

<!------------------------------------------------------------->
<section class="cta">
    <h1>Wilt u meer leren over ons praktijk en de behandelingen die we voeren</h1>
    <a href="leeromgeving.php" class="hero-btn">lees hier verder</a>
</section>
<!------------------------------------------------------------->

<!------------------------------------------------------------->

<section class="footer">
    <h4>about us</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus asperiores quis enim tempora odio perspiciatis rerum,<br>
         ratione placeat accusamus laboriosam doloribus consequatur temporibus nobis amet ex quam veniam cumque obcaecati.</p>
     <div class="icons">                
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-linkedin"></i>

     </div>

</section>
<!------------------------------------------------------------->

<!-----Javascript for hamburger menu--->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right= "none";
            navLinks.style.right = "-200px";
        }
    </script>



</body>
</html>












