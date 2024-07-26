<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('booking.css')}}">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Car Rental</title>
</head>
<body>
  <!-- Start of Navbar -->
  <header>
    <div class="nav container">
      <i class='bx bx-menu' id="menu-icon"></i>
      <a href="#" class="logo"><img src=""><span>CAR</span>RENTAL</a>
      <ul class="navbar">
        <li><a href="/">Home</a></li>
        <li><a href="/#cardetails">Cars Fleet</a></li>
        <li><a href="/#about">About Us</a></li>
        <li><a href="/manage-bookings">Manage Bookings</a></li>
      </ul>
    </div>
  </header>
  <!-- End of Navbar -->

  <!-- Home -->
  <section class="home" id="home">
    <div class="home-text">
      <h1>Booking Form</h1>
    </div>
  </section>

  <!-- booking -->
   @if ($errors->any()) @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <span class="font-medium">Error!</span> {{ $error }}
                    </div>
    @endforeach @endif
    <form method="POST" action="/book_now">
        @csrf
        <input type="hidden" value="{{$vehicle->id}}" name="vehicle_id">
      <div class="booking-container" id="bookingform">
        <div class="col1">
          <div class="driver">
            <span class="title">Choose your Driver</span><br><br>
            <div class="driverrow">

              @if($drivers->count() <= 0 )
              <div>
                <p>No drivers available</p>
              </div>
              @endif

              @foreach($drivers as $driver)
              <div class="driver">
                  <label class="driverExpanded">
                    <input type="radio" name="drivers_id" required value="{{$driver->id}}" />
                    <div class="radio-btn">
                      <img src="{{asset($driver->image)}}" alt="">
                      <h5>{{$driver->name}}</h5>
                      <p>{{$driver->age}}</p>
                      <p>{{$driver->years_of_experience}}</p>
                      <p>{{$driver->license_no}}</p>
                    </div>
                  </label>
                </div> 
              @endforeach
            </div>
          </div>
        </div>

        <div class="col2">
          <div class="person">
            <div class="Pdetails">
              <span class="title">Personal Details</span><br><br>
              <div class="pf fields">
                <div class="input-field">
                  <label for="client_name"></label>
                  <input type="text" id="client_name" name="client_name" placeholder="Full Name" required/>
                </div>
                <div class="input-field">
                  <label for="client_email"></label>
                  <input type="email" id="client_email" name="client_email" placeholder="Email" required/>
                </div>
                <div class="input-field">
                  <label for="client_phone_no"></label>
                  <input type="text" id="client_phone_no" name="client_phone_no"  placeholder="Contact Number" required/>
                </div>
                <div class="input-field">
                  <label for="client_address"></label>
                  <input type="text" id="client_address" name="client_address" placeholder="Address" required/>
                </div>
              </div>
            </div>

            <div class="details">
              <div class="fields">
                <div class="input-field">
                  <label for="pickup_location">Pickup Location</label>
                  <input type="text" id="pickup_location" placeholder="Enter pickup location" name="pickup_location" required/>
                </div>
                <div class="row">
                  <div class="input-field">
                    <label for="date_pick_up">Pickup Date</label>
                    <input type="date" id="date_pick_up" name="date_pick_up" placeholder="Enter Pickup Date" required />
                  </div>
                  <div class="input-field">
                    <label for="time_pick_up">Pickup Time</label>
                    <input type="time" id="time_pick_up" name="time_pick_up" placeholder="Enter Pickup Time" required />
                  </div>
                </div>
              </div>
            </div>

            <div class="details">
              <div class="fields">
                <div class="input-field">
                  <label for="return_location">Return Location</label>
                  <input type="text" id="return_location" placeholder="Enter return location" name="return_location" required/>
                </div>
                <div class="row">
                  <div class="input-field">
                    <label for="date_return">Return Date</label>
                    <input type="date" id="date_return" name="date_return" required />
                  </div>
                  <div class="input-field">
                    <label for="time_return">Return Time</label>
                    <input type="time" id="time_return" name="time_return" required />
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="payment">
            <span>Payment Details</span><br>
            <br>
              <p>Accepted Card</p>
              <img src="{{asset('pictures/payment1.png')}}">
            </label><br><br>
            <div class="fields">
                <div class="input-field">
                  <label for="pickupLocation">Credit Card Number</label>
                  <input type="text" id="creditNo" placeholder="Enter card number" name="creditNo" required/>
                  <label for="creditMonth">Exp Month</label>
                  <input type="text" id="creditMonth" placeholder="Enter exp month" name="creditMonth" required/>
                </div>
                <div class="row">
                  <div class="input-field">
                    <label for="creditYear">Exp Year</label>
                    <input type="text" id="creditYear" name="creditYear" placeholder="Enter exp year" required />
                  </div>
                  <div class="input-field">
                    <label for="creditCvv">CVV</label>
                    <input type="text" id="creditCvv" name="creditCvv" placeholder="CVV" required />
                  </div>
                </div>
              </div>
              <button type="submit" class="btn submit">
                <span class="submit-btn">Book Now</span>
              </button>
          </div>
        </div>
      </div>
    </form>
  
  <!-- Footer -->
  <section class="footer">
    <div class="footer-container container">
      <div class="footer-box">
        <a href="" class="logo"><span>CAR</span>RENTAL</a>
        <div class="social">
          <a href=""><i class='bx bxl-facebook'></i></a>
          <a href=""><i class='bx bxl-instagram'></i></a>
          <a href=""><i class='bx bxl-twitter'></i></a>
          <a href=""><i class='bx bxl-youtube'></i></a>
        </div>
      </div>
      <div class="footer-box">
        <h3>Page</h3>
        <a href="#home">Home</a>
        <a href="#cardetails">Cars Fleet</a>
        <a href="#about">About Us</a>
        <a href="login.html">Manage Bookings</a>
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

  <script src="js/main.js"></script>
</body>
</html>