<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Create a booking transaction</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container m-5">
            <div class="card" style="width: 50%">
                <div class="card-body">
                    <h5 class="card-title">Make a Booking Transaction</h5>
                    @if ($errors->any()) @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <span class="font-medium">Error!</span> {{ $error }}
                    </div>

                    @endforeach @endif @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif

                    <form action="/book/{{$book->id}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Date Request</label
                            >
                            <input
                                type="date"
                                class="form-control"
                                name="date_request"
                                id="date_request"
                                placeholder="name@example.com"
                                value="{{$book->date_request}}"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Client Name</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="client_name"
                                id="client_name"
                                placeholder="Fullname"
                                value="{{$book->client_name}}"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Select a vehicle</label
                            >
                            <select
                                required
                                name="vehicle_id"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected>Select a vehicle</option>
                                @foreach($vehicles as $vehicle) @if($vehicle->id
                                == $book->vehicle_id)
                                <option selected value="{{$vehicle->id}}">
                                    {{$vehicle->name}}
                                </option>
                                @else
                                <option value="{{$vehicle->id}}">
                                    {{$vehicle->name}}
                                </option>
                                @endif @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Select a driver</label
                            >
                            <select
                                required
                                name="drivers_id"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected>Select a driver</option>
                                @foreach($drivers as $driver) @if($driver->id ==
                                $book->drivers_id)
                                <option selected value="{{$driver->id}}">
                                    {{$driver->name}}
                                </option>

                                @endif @if($driver->id != $book->drivers_id)
                                <option value="{{$driver->id}}">
                                    {{$driver->name}}
                                </option>
                                @endif @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Select a dispatcher</label
                            >
                            <select
                                required
                                name="dispatcher_id"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected>Select a dispatcher</option>
                                @foreach($dispatchers as $dispatcher)
                                @if($dispatcher->id == $book->dispatcher_id)
                                <option selected value="{{$dispatcher->id}}">
                                    {{$dispatcher->name}}
                                </option>

                                @endif @if($dispatcher->id !=
                                $book->dispatcher_id)
                                <option value="{{$dispatcher->id}}">
                                    {{$dispatcher->name}}
                                </option>
                                @endif @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Client Address</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="client_address"
                                id="client_address"
                                placeholder="Address"
                                value="{{$book->client_address}}"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Client Phone no.</label
                            >
                            <input
                                type="number"
                                class="form-control"
                                name="client_phone_no"
                                id="client_phone_no"
                                placeholder="Phone no."
                                value="{{$book->client_phone_no}}"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Client Email</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="client_email"
                                id="client_email"
                                placeholder="Email"
                                value="{{$book->client_email}}"
                            />
                        </div>

                        <h5 class="card-title mt-4">Pickup Location Details</h5>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Full address</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="pickup_location"
                                id="pickup_location"
                                placeholder="Full address"
                                value="{{$book->pickup_location}}"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Date pick up</label
                            >
                            <input
                                type="date"
                                class="form-control"
                                name="date_pick_up"
                                id="date_pick_up"
                                placeholder="Full address"
                                value="{{$book->date_pick_up}}"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Time pick up</label
                            >
                            <input
                                type="time"
                                class="form-control"
                                name="time_pick_up"
                                id="time_pick_up"
                                placeholder="Full address"
                                value="{{$book->time_pick_up}}"
                            />
                        </div>

                        <h5 class="card-title mt-4">Return Location Details</h5>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Full address</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="return_location"
                                id="return_location"
                                placeholder="Full address"
                                value="{{$book->return_location}}"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Date pick up</label
                            >
                            <input
                                type="date"
                                class="form-control"
                                name="date_return"
                                id="date_return"
                                placeholder="Full address"
                                value="{{$book->date_return}}"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Time pick up</label
                            >
                            <input
                                type="time"
                                class="form-control"
                                name="time_return"
                                id="time_return"
                                placeholder="Full address"
                                value="{{$book->time_return}}"
                            />
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
