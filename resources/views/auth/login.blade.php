<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="login.css" />
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
                    <li><a href="/#home">Home</a></li>
                    <li><a href="/#cardetails">Cars Fleet</a></li>
                    <li><a href="/#about">About Us</a></li>
                    <li>
                        <a href="/manage-bookings" class="active"
                            >Manage Bookings</a
                        >
                    </li>
                </ul>
            </div>
        </header>
        <!-- End of Navbar -->

        <!-- Home -->
        <section class="home">
            <div class="hero" id="hero">
                <div class="form-container">
                    <h2>Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <input
                            type="text"
                            class="inputfield"
                            placeholder="Email"
                            required
                            name="email"
                        />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input
                            type="password"
                            class="inputfield"
                            placeholder="password"
                            required
                            name="password"
                        />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="submit" class="submit-btn">Log in</button>
                    </form>
                </div>
            </div>
        </section>

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
                    <a href="home.html #home">Home</a>
                    <a href="home.html #cardetails">Cars Fleet</a>
                    <a href="home.html #about">About Us</a>
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
