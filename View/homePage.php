<!DOCTYPE html>
<html lang="en">
<head>
    <!-- =============== FAVICON =============== -->
    <link rel="shortcut icon" type="image/png" href="assets/imgs/icon2.png">
    <!-- =============== META =============== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =============== TITLE =============== -->
    <title>AutoFocus | Car Rental Platform</title>
    <!-- =============== REMIXI ICONS =============== -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- =============== CSS =============== -->
    <link rel="stylesheet" href="assets/css/homePage.css">
</head>
<body>
    <!-- =============== PRE-LOADER =============== -->
    <div class="loader-bg" onmousemove="playCarSound()" >
        <img src="assets/imgs/icon2.png" >
    </div>

    <!-- =============== HEADER =============== -->
    <header class="nav">
        <div class="left-section">
            <a href="#main-content"><img src="assets/imgs/logoHq.png" alt="Logo Img"></a> 
        </div>

        <div class="mid-section">
            <nav class=".nav__menu">
                <ul class="navigation">
                    <li><a href="#main-content" class="active-link">home</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#advantage">advantage</a></li>
                    <li><a href="#how-it-works">how it works</a></li>
                    <li><a href="#gallery">gallery</a></li>
                    <li><a href="contactUsPage.php">conatct us</a></li>
                </ul>
            </nav>
        </div>

        <div class="right-section">
            <a class="listCarBtn" href="loginPage.php">list a car?</a>
            <a class="phoneBtn" href="contactUsPage.php"><i class="ri-phone-fill icon"></i>+20 114 7450 629</a>
        </div>
    </header>

    <!-- =============== MAIN CONTENT =============== -->
    <section class="main-content" id="main-content">
        <div class="red-rectangle"></div>
        <div class="red-border"></div>
        <div class="black-border"></div>

        <div class="splashes">
            <div class="rec colored-rec"></div>
            <div class="rec white-rec"></div>
            <div class="rec colored-rec"></div>
        </div>
    
        <div class="row">
            <div class="text">
                <h2 class="main-text">
                    hire a<br>luxury <span>car</span><br>in a click
                </h2>
                <p class="specs">
                    $10/KM<br>
                    <span>Minimum</span>
                    <div class="line"></div>
                </p>
                <div class="buttons">
                    <a class="hireBtn" href="CarsAndReservations.php">hire now</a>
                    <div class="social-icons">
                        <a href="#"><i class="ri-facebook-box-fill icon"></i></a>
                        <a href="#"><i class="ri-instagram-fill icon"></i></a>
                        <a href="#"><i class="ri-twitter-fill icon"></i></a>
                        <a href="#"><i class="ri-youtube-fill icon"></i></a>
                    </div>
                </div>
            </div>

            <div class="hero-img">
                <img class="myCar" src="assets/imgs/PngCar2.png" alt="Car Image">
            </div>
        </div>

        <div class="scroll">
            <a href="#services" class="scroll-down">
                <div class="mouse">
                    <span></span>
                </div>
            </a>
        </div>
    </section>

    <!-- =============== SEVICES =============== -->
    <section class="services" id="services">
        <div class="upper-section">
            <div class="left-section">
                <p class="small-title">services</p>
                <h2 class="big-title">services<br>we <span>offered</span></h2>
            </div>

            <div class="right-section">
                <div class="text">
                    <h2>10% OFF <span>on the first rift</span></h2>
                </div>
                <div class="splashes">
                    <div class="rec colored-rec"></div>
                    <div class="rec white-rec"></div>
                    <div class="rec colored-rec"></div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="right">
                <div class="text">
                    <p>CARS</p>
                    <h2>DEFAULT RIDES</h2>
                    <p>$10/KM</p>
                </div>
                <img class="car1" src="assets/imgs/pngCar.png" alt="wedding car" />
                <a href="CarsAndReservations.php">
                    <input type="button" value="HIRE NOW">
                </a>
                <img class="icon1" src="assets/imgs/steeringWheelIcon.png" alt="steering wheel" />
            </div>
         
            <div class="center">
                <div class="text">
                    <p>CARS</p>
                    <h2>VIP CORPORATE RIDES</h2>
                    <p>$100/KM</p>
                </div>
                <img class="car2" src="assets/imgs/PngCar2.png" alt="wedding car" />
                <a href="CarsAndReservations.php">
                    <input type="button" value="HIRE NOW">
                </a>
                <img class="icon1" src="assets/imgs/steeringWheelIcon.png" alt="steering wheel" />
            </div>
            
            <div class="left">
                <div class="text">
                    <p>ON DEMAND</p>
                    <h2>EXECUTIVE RIDES</h2>
                    <p>$150/KM</p>
                </div>
                <img class="car3" src="assets/imgs/pngCar5.png" alt="wedding car" />
                <a href="CarsAndReservations.php">
                    <input type="button" value="HIRE NOW">
                </a>
                <img class="icon1" src="assets/imgs/steeringWheelIcon.png" alt="steering wheel" />
            </div>
        </div>
    </section>

    <!-- =============== ADVANTAGES =============== -->
    <section class="advantage" id="advantage">
        <div class="upper-section">
            <div class="left-section">
                <p class="small-title">advantage</p>
                <h2 class="big-title">what are the<br><span>advantages</span></h2>
            </div>

            <div class="right-section">
                <div class="splashes">
                    <div class="rec colored-rec"></div>
                    <div class="rec white-rec"></div>
                    <div class="rec colored-rec"></div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <!-- card 1 -->
                <div class="card">
                    <img class="icon" src="assets/imgs/fuelIcon.png" alt="Fuel tank icon">
                    <div class="text">
                        <h2 class="title">
                            fuel cost included
                        </h2>
                        <p>
                            Don't worry about mileage! All fuel costs are included. if you refill fuel. we'll pay you back! 
                        </p>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="card">
                    <img class="icon" src="assets/imgs/glass.png" alt="no mony icon">
                    <div class="text">
                        <h2 class="title">
                            no hidden charges
                        </h2>
                        <p>
                            Our prices include taxes and insurance. What you see is what you pay!
                        </p>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="card">  
                    <img class="icon" src="assets/imgs/giftIcon.png" alt="Fuel tank icon">
                    <div class="text">
                        <h2 class="title">
                            flexi pricing package
                        </h2>
                        <p>
                            One size never fits all! Choose a balance of time and kilometers that works best for you.
                        </p>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <!-- card 4 -->
                <div class="card">
                    <img class="icon" src="assets/imgs/loactionIcon.png" alt="Fuel tank icon">
                    <div class="text">
                        <h2 class="title">
                            go anywhere
                        </h2>
                        <p>
                            our cars have all-Egypt permits. Just remember to pay state tolls and entry taxes. 
                        </p>
                    </div>
                </div>
                <!-- card 5 -->
                <div class="card">
                    <img class="icon" src="assets/imgs/repair.png" alt="Fuel tank icon">
                    <div class="text">
                        <h2 class="title">
                            24x7 roadside assistance
                        </h2>
                        <p>
                            we have round-the-clock, pan Egypt partners. Help is never far away from you.
                        </p>
                    </div>
                </div>
                <!-- card 6 -->
                <div class="card">
                    <img class="icon" src="assets/imgs/damageIcon2.png" alt="Fuel tank icon">
                    <div class="text">
                        <h2 class="title">
                            damage insurance
                        </h2>
                        <p>
                            All your bookings include damage insurance! Drive dafe, but don't worry
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== QUOTE =============== -->
    <section class="quote" id="quote">
        <div class="bg">
            <img src="assets/imgs/bgImageF.png">
        </div>
        <div class="upper-section">
            <div class="left-section">
                <h2 class="big-title">enjoy moment with<br><span>premuiness</span></h2>
                <p class="desc">Our cars have all-Egypt premits. <br>Just remember to pay state tolls and entry taxes.</p>
            </div>
        </div>
    </section>

    <!-- =============== HOW IT WORKS =============== -->
    <section class="how-it-works" id="how-it-works">
        <!-- upper section -->
        <div class="upper-section">
            <div class="left-section">
                <p class="small-title">learn</p>
                <h2 class="big-title">how it<br><span>works</span></h2>
            </div>
            <div class="right-section">
                <div class="text">
                    <h2>100%  <span>full santisfied</span></h2>
                </div>
                <div class="splashes">
                    <div class="rec colored-rec"></div>
                    <div class="rec white-rec"></div>
                    <div class="rec colored-rec"></div>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="content">
            <div class="row">
                <!-- step 1 -->
                <div class="card">
                    <div class="img-card">
                        <img class="icon" src="assets/imgs/payIcon.png" alt="visa icon">
                    </div>
                    <div class="text">
                        <h2 class="title">
                            book & pay
                        </h2>
                        <p>
                            Pick your favourite car, time and place
                        </p>
                    </div>
                    <h2 class="bottom-text">01</h2>
                    <div class="rectangle"></div>
                </div>
                <!-- step 2 -->
                <div class="card">
                    <div class="img-card">
                        <img class="icon" src="assets/imgs/keyicon.png" alt="visa icon">
                    </div>
                    <div class="text">
                        <h2 class="title">
                            recieve
                        </h2>
                        <p>
                            We will deliver your car to your doorstep
                        </p>
                    </div>
                    <h2 class="bottom-text">02</h2>
                    <div class="rectangle"></div>
                </div>
                <!-- step 3 -->
                <div class="card">
                    <div class="img-card">
                        <img class="icon" src="assets/imgs/steeringWheelIcon.png" alt="visa icon">
                    </div>
                    <div class="text">
                        <h2 class="title">
                            drive
                        </h2>
                        <p>
                            Feel free & Enjoy your self drive ride
                        </p>
                    </div>
                    <h2 class="bottom-text">03</h2>
                    <div class="rectangle"></div>
                </div>
                <!-- step 4 -->
                <div class="card">
                    <div class="img-card">
                        <img class="icon" src="assets/imgs/returnIcon.png" alt="visa icon">
                    </div>
                    <div class="text">
                        <h2 class="title">
                            return
                        </h2>
                        <p>
                            Get the car back to your preferred location
                        </p>
                    </div>
                    <h2 class="bottom-text">04</h2>
                    <div class="rectangle"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== GALLERY =============== -->
    <section class="gallery" id="gallery">
        <div class="upper-section">
            <div class="left-section">
                <p class="small-title">gallery</p>
                <h2 class="big-title">some of best<br><span>memories</span></h2>
            </div>
            <div class="right-section">
                <div class="text">
                    <h2>100%  <span>customer satisifiction</span></h2>
                </div>
                <div class="splashes">
                    <div class="rec colored-rec"></div>
                    <div class="rec white-rec"></div>
                    <div class="rec colored-rec"></div>
                </div>
            </div>
        </div>
        <!-- gallery -->
        <div class="img-gallery">
            <!-- image 1 -->
            <div class="img-box">
                <img src="assets/imgs/1.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 2 -->
            <div class="img-box">
                <img src="assets/imgs/2.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 3 -->
            <div class="img-box">
                <img src="assets/imgs/3.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 4 -->
            <div class="img-box">
                <img src="assets/imgs/20.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 5 -->
            <div class="img-box">
                <img src="assets/imgs/5.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 6 -->
            <div class="img-box">
                <img src="assets/imgs/6.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 7 -->
            <div class="img-box">
                <img src="assets/imgs/7.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 8 -->
            <div class="img-box">
                <img src="assets/imgs/13.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 9 -->
            <div class="img-box">
                <img src="assets/imgs/8.jpg">
                <div class="overlay">
                    <div class="icon"> 
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 10 -->
            <div class="img-box">
                <img src="assets/imgs/9.jpg">
                <div class="overlay">
                    <div class="icon"> 
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 11 -->
            <div class="img-box">
                <img src="assets/imgs/10.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 12 -->
            <div class="img-box">
                <img src="assets/imgs/11.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 13 -->
            <div class="img-box">
                <img src="assets/imgs/12.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 14 -->
            <div class="img-box">
                <img src="assets/imgs/14.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 15 -->
            <div class="img-box">
                <img src="assets/imgs/21.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 16 -->
            <div class="img-box">
                <img src="assets/imgs/16.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 17 -->
            <div class="img-box">
                <img src="assets/imgs/17.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 18 -->
            <div class="img-box">
                <img src="assets/imgs/18.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>
            <!-- image 19 -->
            <div class="img-box">
                <img src="assets/imgs/19.jpg">
                <div class="overlay">
                    <div class="icon">
                        <a href="#"><i class="ri-add-circle-line icon"></i></a>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <!-- =============== FAQ =============== -->
    <section class="Faq" id="faq">
        <div class="upper-section">
            <div class="left-section">
                <p class="small-title">faq</p>
                <h2 class="big-title">do you have<br>any<span> questions</span></h2>
            </div>
        </div>
        <!-- quesions -->
        <div class="questions">
            <div class="faq">
                <div class="question">
                    <h3>Do I have to return the car to the same location where I picked It up ?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21 L39 3" stroke="white" stroke-width="7" stroke-linecap="round" fill="none" />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        Yes, the car must be returned from the same location picked It up
                    </p>
                    <div class="lineq"></div>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>What Is happens If I return the car late ?</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21 L39 3" stroke="white" stroke-width="7" stroke-linecap="round" fill="none" />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        Yes, you will pay a fine, and this fine may reach 500 EGP in case of delay for a whole day
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>Is there a km limit to how much I can drive ?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21 L39 3" stroke="white" stroke-width="7" stroke-linecap="round" fill="none" />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        No, but the price of renting a car varies if the rental is for the purpose of travel
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>How do I unlock my car ?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21 L39 3" stroke="white" stroke-width="7" stroke-linecap="round" fill="none" />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        There will be full instructions on how to manage with the car when the mobile application
                        comeing
                        soon
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>Where can I find the Car Keys ?</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21 L39 3" stroke="white" stroke-width="7" stroke-linecap="round" fill="none" />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        Keys are received when renting the car
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>What are the fines that Zoomcar levies on the customer ?</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21 L39 3" stroke="white" stroke-width="7" stroke-linecap="round" fill="none" />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        In the event of delay in returning the car for a whole day, the fine may reach $50
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>How do I end my reservation ?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21 L39 3" stroke="white" stroke-width="7" stroke-linecap="round" fill="none" />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        You can cancel the reservation from the website or the application, and 15% of the reservation
                        price
                        will be deducted
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>How will I receive my Refund ?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21 L39 3" stroke="white" stroke-width="7" stroke-linecap="round" fill="none" />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        When returning the car or by pay card
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== MOBILE APP =============== -->
    <section class="mobile-app" id="mobile-app">
        <div class="bg"></div>

        <div class="upper-section">
            <div class="left-section">
                <p class="small-title">coming soon</p>
                <h2 class="big-title">stay tuned for<br><span>Autofocus </span>app</h2>
                <p class="desc">Make a booking, unlock your car, and end your reservation all from our app</p>
                
                <div class="buttons">
                    <a class="btn" href="#">
                        <div class="icon">
                            <img src="assets/imgs/Play-store.png" alt="play store icon">
                        </div>
                        <div class="text">
                            <h2>Available on<br><span>GOOGLE PLAY</span></h2>
                        </div>
                    </a>

                    <a class="btn" href="#">
                        <div class="icon">
                            <img src="assets/imgs/app-storeW.png" alt="play store icon">
                        </div>
                        <div class="text">
                            <h2>Available on<br><span>APP STORE</span></h2>
                        </div>
                    </a>
                </div>
            </div>

            <div class="right-section">
                <img class="app1" src="assets/imgs/mobile-app1.png" alt="mobile app 1">
                <img class="app2" src="assets/imgs/mobile-app2.png" alt="mobile app 2">
            </div>
        </div>
    </section>
    <!-- =============== FOOTER =============== -->
    <section class="footer" id="footer">
        <div class="title">
            <h2>new <span>cars</span></h2>
        </div>
        <div class="container">
            <div class="card card1">
                <div class="car-img">
                    <img src="assets/imgs/juke.png" alt="car Image">
                </div>
                <div class="card-text">
                    <div class="fuel">
                        <i class="ri-gas-station-fill"></i>
                        <p>1.9</p>
                    </div>
                    <div class="text">
                        <h3>luxury car</h3>
                        <h2>Nissan juke 2020</h2>
                    </div>
                    <div class="price">
                        <h3>from 230 egp</h3>
                    </div>
                </div>
                <div class="button">
                    <a href="CarsAndReservations.php">hire now</a>
                </div>
            </div>

            <div class="card card2">
                <div class="car-img">
                    <img src="assets/imgs/pngCar5.png" alt="car Image">
                </div>
                <div class="card-text">
                    <div class="fuel">
                        <i class="ri-gas-station-fill"></i>
                        <p>1.6</p>
                    </div>
                    <div class="text">
                        <h3>vip car</h3>
                        <h2>Mercedes capo 2022</h2>
                    </div>
                    <div class="price">
                        <h3>from 330 egp</h3>
                    </div>
                </div>
                <div class="button">
                    <a href="CarsAndReservations.php">hire now</a>
                </div>
            </div>
        </div>

        <div class="form-section">
            <div class="left-section">
                <h2 class="title"><span>subscribe</span> to news</h2>
                <p class="description">your bounces and discounts await</p>
                <form>
                    <input class="name" type="text" placeholder="Name" required>
                    <input class="email" type="email" placeholder="Email" required>
                    <input class="submit-btn" type="submit" value="Subscribe To News">
                </form>
            </div>
            
            <div class="right-section">
            </div>
        </div>

        <div class="lower-section">
            <div class="left-section">
                <a href="#main-content"><img src="assets/imgs/logoHq.png" alt="Logo Img"></a> 
            </div>
            <div class="mid-section">
                <i class="ri-copyright-fill"></i> 2022 All rights reserved.
            </div>
            <div class="right-section">
                <div class="social-icons">
                    <a href="#"><i class="ri-facebook-box-fill icon"></i></a>
                    <a href="#"><i class="ri-instagram-fill icon"></i></a>
                    <a href="#"><i class="ri-twitter-fill icon"></i></a>
                    <a href="#"><i class="ri-youtube-fill icon"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== JAVASCRIPT =============== -->

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <!-- =============== CAR SOUND =============== -->
    <audio id="CarSound" preload="auto" src="carSound3.mp3"></audio>
    
    <!-- =============== JQUERY =============== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- =============== SCROLL REVEAL =============== -->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!-- =============== MAIN FILE =============== -->
    <script src="assets/js/homePage.js"></script>

</body>
</html>