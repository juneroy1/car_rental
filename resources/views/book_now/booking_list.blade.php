<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <header class="mb-5">
            <div class="nav container">
                <i class="bx bx-menu" id="menu-icon"></i>
                <a href="/#home" class="logo"
                    ><img src="" /><span>CAR</span>RENTAL</a
                >
                <ul class="navbar">
                    <li><a href="/#home" class="active">Home</a></li>
                    <li><a href="/#cardetails">Cars Fleet</a></li>
                    <li><a href="/#about">About Us</a></li>
                    <li><a href="/manage-bookings">Manage Bookings</a></li>
                </ul>
            </div>
        </header>

        <div class="container m-5 my-10" style="margin-top: 100px !important">
            <h1>
                Hey {{$user->name}}!
                {{$user->is_admin == '1'? 'These are the list of booking transactions':'These are your booking transactions'}}
            </h1>
            <label for=""><a href="/">Lets book another</a></label>
            @foreach($bookings as $booking)
            <div class="card m-2" style="width: 100%">
                <div class="card-body">
                    <div class="container text-start">
                        <div class="row justify-content-between">
                            <div class="col-4">
                                <h5 class="card-title">Details</h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                <div class="container">
                                    <p class="card-text m-0">
                                        Fullname: {{$booking->client_name}}
                                    </p>
                                    <p class="card-text m-0">
                                        Email: {{$booking->client_email}}
                                    </p>
                                    <p class="card-text m-0">
                                        Contact #: {{$booking->client_phone_no}}
                                    </p>
                                    <p class="card-text m-0">
                                        Address: {{$booking->client_address}}
                                    </p>
                                </div>

                                <h5 class="card-title mt-4">Vehicle Details</h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                <div class="container">
                                    <p class="card-text m-0">
                                        Vehicle name:
                                        {{$booking->vehicle->name}}
                                    </p>
                                    <p class="card-text m-0">
                                        Price Details:
                                        {{$booking->vehicle->description}}
                                    </p>
                                    <p class="card-text m-0">
                                        Vehicle Type:
                                        {{$booking->vehicle->vehicle_type}}
                                    </p>
                                    <p class="card-text m-0">
                                        Capacity:
                                        {{$booking->vehicle->capacity}}
                                    </p>
                                </div>

                                <h5 class="card-title mt-4">Driver Details</h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                <div class="container">
                                    <p class="card-text m-0">
                                        Fullname: {{$booking->driver->name}}
                                    </p>
                                    <p class="card-text m-0">
                                        Age: {{$booking->driver->age}}
                                    </p>
                                    <p class="card-text m-0">
                                        Years of experience:
                                        {{$booking->driver->years_of_experience}}
                                    </p>
                                    <p class="card-text m-0">
                                        Address:
                                        {{$booking->driver->license_no}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-4">
                                <h5 class="card-title mt-4">
                                    Pickup Location Details
                                </h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                <div class="container">
                                    <p class="card-text m-0">
                                        Full address:
                                        {{$booking->pickup_location}}
                                    </p>
                                    <p class="card-text m-0">
                                        Date return: {{$booking->date_pick_up}}
                                    </p>
                                    <p class="card-text m-0">
                                        Time return:
                                        {{$booking->time_pick_up}}
                                    </p>
                                </div>
                                <h5 class="card-title mt-4">
                                    Return Location Details
                                </h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                <div class="container">
                                    <p class="card-text m-0">
                                        Full address:
                                        {{$booking->return_location}}
                                    </p>
                                    <p class="card-text m-0">
                                        Date return: {{$booking->date_return}}
                                    </p>
                                    <p class="card-text m-0">
                                        Time return:
                                        {{$booking->time_return}}
                                    </p>
                                </div>

                                @if (!Auth::guest() && $user->is_admin == '1')
                                <div
                                    class="container"
                                    style="margin-top: 80px !important"
                                >
                                    <p class="card-text m-0">
                                        <a href="/book/{{$booking->id}}"
                                            >Update Details</a
                                        >
                                        <!-- {{$booking->return_location}} -->
                                    </p>
                                </div>
                                <div
                                    class="container"
                                    style="margin-top: 80px !important"
                                >
                                    <p class="card-text m-0">
                                        <form action="/book/delete/{{$booking->id}}" method="post">
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                        <!-- <a href="/book/{{$booking->id}}"
                                            >Update Details</a
                                        > -->
                                        <!-- {{$booking->return_location}} -->
                                    </p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
            @endforeach
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
