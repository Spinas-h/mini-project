<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    
    <body>
        <button onclick="goToLogin()" style="position: absolute; top: 10px; right: 10px; padding: 7px 10px; font-size: 16px; border-radius:10px; background-color:rgb(190, 7, 7); color:white;">Login/register</button>
        <h1 style="font-family:cursive; font-style:bold;">
            <img src="images/logo2.png" alt="Logo" style="height: 100px; width:120px; vertical-align: middle; margin-right:0px;">WELCOME
            <?php
            if (session_status() === PHP_SESSION_NONE) {
                session_start(); // Start the session to access session variables
            }
            include "config.php";
            
            session_unset(); // Clear all session variables
            session_destroy(); // Destroy the session
            mysqli_close($conn);
            ?>
        </h1>
        <nav class="navbar">
        <ul>
        <li><a href="home.html">HOME</a></li>
        <li><a href="product.html">PRODUCTS</a></li>
        <li> <a href="about.html">ABOUT</a></li>
        <li><a href="cart.html">YOUR CART</a></li>
        
        </ul>
        </nav>
        <main>
            <div class="category-set1">
                <div class="category1">
                <a href="healthcare.html"><img src="images/healthcare.png" alt="healthcare"></a>
                    <p>Healthcare</p>
                </div>
                <div class="category1">
                <a href="medicines.php"><img src="images/medicines.png" alt="medicines"></a>
                    <p>Medicines</p>
                </div>
                <div class="category1">
                <a href="#labtests"><img src="images/labtest.png" alt="labtests"></a>
                    <p>Labtests</p>
                </div>
            </div>
               
            <div class="slider">
                <div class="slides">
                    <img class="slide" src="images/pixtrusted.png" alt="img1">
                    <img class="slide" src="images/medicinesdelivered.png" alt="img2">
                    <img class="slide" src="images/pixlabtest.png" alt="img3">
                </div>
                <button class="prev" onclick="prevSlide()">&#10094</button>
                <button class="next" onclick="nextSlide()">&#10095</button>
            </div><br><br><br><br><br><br>
            <div id="labtests">
                <p style="margin-left:30px; font-size:28px; font-family:fantasy;">
                labtests you can book for <img src="images/logo1.png" alt="logo" style="height:100px; width:120px; vertical-align: middle;"></p><br>
            <div class="category-set2">
                <div class="category2">
                    <a href="fever.html"><img src="images/fever.png"></a>
                    <p>Fever and infection</p>
                </div>
                
                <div class="category2">
                    <a href="vitamnis.html"><img src="images/vitamins.png"></a>
                    <p>Vitamins</p>
                </div>
                <div class="category2">
                    <a href="thyroid.html"><img src="images/thyroid.png"></a>
                    <p>Thyroid</p>
                </div>
             </div>
             </div>
<script>
    const slides=document.querySelectorAll(".slides img"); 
let slideIndex=0;
let IntervalId=null;
initializeSlider();

function initializeSlider(){
    if(slides.length > 0){
    slides[slideIndex].classList.add("displaySlide");
    intervalId=setInterval(nextSlide, 5000);
    }
}
  

function showSlide(index){
    if(index >= slides.length)
{
    slideIndex=0;
}
else if(index < 0){
    slideIndex=slides.length-1;
}
    slides.forEach(slide => {
        slide.classList.remove("displaySlide");
    });
    slides[slideIndex].classList.add("displaySlide");

}
function prevSlide(){
    
    slideIndex--;
    showSlide(slideIndex);
}
function nextSlide(){
    slideIndex++;
    showSlide(slideIndex);

}

            function goToLogin() {
                window.location.href = 'login.html';
            }

</script>
            
            
        </main>
       
     </body><hr>
    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Opharm</h3>
                <p>Opharm is your trusted online pharmacy for healthcare products, medicines, and lab tests.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="product.html">Products</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="cart.html">Your Cart</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: <a href="mailto:contact@opharm.com">contact@opharm.com</a></p>
                <p>Phone: 9903349300</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Opharm. All rights reserved.</p>
        </div>
    </footer>
    
</html>
