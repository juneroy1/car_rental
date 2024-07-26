<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="style.css" />
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <title>Car Rental</title>
    </head>

    <body>
        <!-- Start of Navbar -->
        <header>
            <div class="nav container">
                <i class="bx bx-menu" id="menu-icon"></i>
                <a href="#" class="logo"
                    ><img src="" /><span>CAR</span>RENTAL</a
                >
                <ul class="navbar">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#cardetails">Cars Fleet</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="/manage-bookings">Manage Bookings</a></li>
                    @if (!Auth::guest())
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button style="background-color: #0a1d0a;
    color: white;" type="submit">logout</button></li>
                        </form>
                        
                    @endif
                </ul>
            </div>
        </header>
        <!-- End of Navbar -->

        <!-- Home -->
        <section class="home" id="home">
            <div class="home-text">
                <h1>
                    Looking to save more<br />on your <span>rental car?</span>
                </h1>
                <a href="#cardetails" class="btn">Book Now</a>
            </div>
        </section>

        <!-- Car -->
        <section class="cardetails" id="cardetails">
            <div class="heading">
                <span>Cars Fleet</span>
                <h2>High service for every customer</h2>
                <p>
                    You cannot put a price on your family's safety and security
                    on the road. <br />Rent your desired car now.
                </p>
            </div>

            <!-- Cars Container -->
            <div class="cars-container container">
                @foreach($vehicles as $vehicle)
                <div class="box">
                    <img src="{{$vehicle->image}}" alt="" />
                    <h3>{{$vehicle->name}}</h3>
                    <span>{{$vehicle->description}}</span>
                    <i class="bx bxs-car">{{$vehicle->vehicle_type}}</i>
                    <i
                        class="bx bx-wind"
                        >{{$vehicle->is_air_conditioned? 'Air Conditioned': 'Non air conditioned' }}</i
                    >
                    <i class="bx bx-chair">{{$vehicle->capacity}} seater</i>
                    <a
                        href="/book_now/{{$vehicle->id}}"
                        class="btn"
                        id="booking-pop"
                        >Book Now</a
                    >
                </div>
                @endforeach
                <!-- <div class="box">
                    <img src="pictures/car1.jpg" alt="" />
                    <h3>Mitsubishi Xpander</h3>
                    <span>from 6,000/weekend</span>
                    <i class="bx bxs-car">Minivan (2021)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">7 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car2.jpg" alt="" />
                    <h3>Toyota Alphard</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Minivan (2002)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">7 or 8 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car3.jpg" alt="" />
                    <h3>Hyundai Starai</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Minivan (2021)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">11 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car4.jpg" alt="" />
                    <h3>Kia Carnival</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Minivan (2018)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">8 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car5.jpg" alt="" />
                    <h3>GAC GN8</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Minivan (2020)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">7 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car6.jpg" alt="" />
                    <h3>Toyota Hiace</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Family Van (2016)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">12 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car7.jpg" alt="" />
                    <h3>Nissan Urvan</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Family Van(2018)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">18 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car8.jfif" alt="" />
                    <h3>Ford Transit</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Family Van (2019)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">14 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car9.jfif" alt="" />
                    <h3>Foton view Traveller XL</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Family Van (2020)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">16 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car10.jpg" alt="" />
                    <h3>Honda Odyssey</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Family Van (2017)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bx-chair">7-8 seater</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car11.jpg" alt="" />
                    <h3>Isuzu Traviz</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car"> Cargo truck (2021)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bxs-truck">41.1 cubes</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car12.jpg" alt="" />
                    <h3>Fuso Canter FE73 Cargo</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Cargo truck (2022)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bxs-truck">2,405 kg</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car13.jpg" alt="" />
                    <h3>Captain D9 (24 FT)</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Cargo truck (2022)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bxs-truck">10,000 kg</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car14.jpg" alt="" />
                    <h3>Isuzu F-Series FVM34</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Cargo truck (2022)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bxs-truck">18,995 kg</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div>
                <div class="box">
                    <img src="pictures/car15.jpg" alt="" />
                    <h3>Foton Tornado M4.2C</h3>
                    <span>from $99/weekend</span>
                    <i class="bx bxs-car">Honda Odyssey (2017)</i>
                    <i class="bx bx-wind">Air Conditioned</i>
                    <i class="bx bxs-truck">4,200kg</i>
                    <a href="#popup-form" class="btn" id="booking-pop"
                        >Book Now</a
                    >
                </div> -->
            </div>
        </section>

        <!-- Reservation -->

        <!-- About -->
        <section class="about container" id="about">
            <div class="about-image">
                <img src="pictures/carbt.jpg" alt="" />
            </div>
            <div class="about-text">
                <span>About Us</span>
                <h2>Quality Cars<br />At Cheap Prices</h2>
                <p>
                    We at TEC's Vehicle want to be the top rental car company,
                    providing best cars for rent at the lowest rates available.
                    You can make new friends and possibly develop lifelong
                    relationships on every trip. So allow TEC's Vehicle to
                    accompany you on your trip and give you an experience that
                    goes well beyond driving. We provide the best value for your
                    money when it comes to all of your transportation
                    necessities.
                </p>
            </div>
        </section>
        <!-- Reviews -->
	<section class="section">
        <div class="heading"><b>Customers </b>Testimonials</div>
        <div class="wrapper">
            <div class="container">
                <div class="profile">
                    <div class="imgBox">
                        <img src="pictures/t1.jpg">
                    </div>
                    <h2>Luca Wang</h2>
                </div>
                <p><span class="fa fa-quote-left left"></span> Their booking process is the next killer. Your company is truly upstanding and is behind its product and services is 100%. Fantastic, I'm totally blown away by CARRENTAL website it's good and very efficient to use. No time wasting to book and to login your account is very easy, easy to navigate. Eye catching design and their product is good at "what you see is what you get". <b><br>Luca W. from Panabo City</br></b> <span class="fa fa-quote-right right"></span> </p>
                <div class="social">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

            <div class="container">
                <div class="profile">
                    <div class="imgBox">
                        <img src="pictures/t2.jpg">
                    </div>
                    <h2>Brittany Spence</h2>
                </div>
                <p><span class="fa fa-quote-left left"></span> The second fatal flaw is in their booking procedure. Your business is genuinely honorable and stands 100% behind its goods and services. Fantastic, the CARRENTAL website is so useful and easy to use that I'm completely blown away. No time is wasted when making a reservation, and logging into your account is simple and intuitive.<b><br>Britanny S. from Tagum City</br></b> <span class="fa fa-quote-right right"></span> </p>
                <div class="social">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

            <div class="container">
                <div class="profile">
                    <div class="imgBox">
                        <img src="pictures/t3.jpg">
                    </div>
                    <h2>Julianne Pruitt</h2>
                </div>
                <p><span class="fa fa-quote-left left"></span> Their check-in procedure is the next fatal flaw. Your business is reputable and fully stands behind its goods and services. The CARRENTAL website is excellent and incredibly easy to use. I'm just blown away. The process of booking and logging into your account is quick and simple. Their product has a good and fair deal, quality and an attractive design.<b><br>Jullianne P. from Sto. Tomas</br></b> <span class="fa fa-quote-right right"></span> </p>
                <div class="social">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

        </div>
    </section>

        <!-- Pop-up first -->

        <!-- Pop-up Second 
		<section>
	    <div class="popup second" id="popup-two">
	      	<div class="close-btn" id="close">&times;</div>
	      	<h2>Booking Details</h2>
	        	<div class="rowbook sec">		
	        		<div class="form-first">
		        		<div class="details">
		        			<br>
			        		<label>Full name: </label>
			        		<label>Email: </label>
			        		<label>Contact Number: </label>
			        		<label>Address: </label>
			        		<br>
			        		<label>Pickup Location: </label>
			        		<label>Pickup Date: </label>
			        		<label>Pickup Time: </label>
			        		<br>
			        		<label>Return Location: </label>
			        		<label>Return Date: </label>
			        		<label>Return Time: </label>

			        		<label>No. of days:</label>

			        		<div class="row">
			        			<label>Car: </label>
				        		<label>Driver: </label>
			        		</div>
			        			<br>
			        		<div class="row">
			        			<button class="backBtn">
				            		<span class="btnText">Back</span>
				            	</button>
				            	<button class="bookBtn">
				            		<span class="btnText">Book Now</span>
				            	</button>
			        		</div>
			            </div>
			        </div>	
				</div>
			</div>
		</section>

-->

        <!-- Footer -->
        <section class="footer">
            <div class="footer-container container">
                <div class="footer-box">
                    <a href="" class="logo"><span>CAR</span>RENTAL</a>
                    <div class="social">
                        <a href=""><i class="bx bxl-facebook"></i></a>
                        <a href=""><i class="bx bxl-instagram"></i></a>
                        <a href=""><i class="bx bxl-twitter"></i></a>
                        <a href=""><i class="bx bxl-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-box">
                    <h3>Page</h3>
                    <a href="#home">Home</a>
                    <a href="#cardetails">Cars Fleet</a>
                    <a href="#about">About Us</a>
                    <a href="">Manage Bookings</a>
                </div>
                <div class="footer-box">
                    <h3>Contact</h3>
                    <p>Santo Tomas</p>
                    <p>Carmen</p>
                    <p>Panabo City</p>
                    <p>Tagum City</p>
                </div>
            </div>
        </section>

        <!-- Copyright -->
        <div class="copyright">
            <p>&#169; CRBs CARRENTAL All Right Reserved</p>
        </div>

        <script src="main.js"></script>
    </body>
</html>
