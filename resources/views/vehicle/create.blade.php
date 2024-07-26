<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Create Vehicle</title>
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
                    @if ($errors->any()) @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <span class="font-medium">Error!</span> {{ $error }}
                    </div>

                    @endforeach @endif

                    <h5 class="card-title">Create New Vehicle</h5>
                    <form action="/vehicle" method="post">
                        @csrf
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Car name</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                placeholder="car name"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Car Description</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="description"
                                id="description"
                                placeholder="car description"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Car Price in weekend</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="price"
                                id="price"
                                placeholder="car price"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Plate No.</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="plate_no"
                                id="plate_no"
                                placeholder="plate no here"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Vehicle Type</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="vehicle_type"
                                id="vehicle_type"
                                placeholder="vehicle typle here"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Date acquired</label
                            >
                            <input
                                type="datetime-local"
                                class="form-control"
                                name="date_acquired"
                                id="date_acquired"
                                placeholder="date acquired here"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Year Model</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="year_model"
                                id="year_model"
                                placeholder="year model here"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Under Maintenance?</label
                            >
                            <input
                                type="checkbox"
                                name="is_maintenance"
                                id="is_maintenance"
                                value="1"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Capacity</label
                            >
                            <input
                                type="number"
                                class="form-control"
                                name="capacity"
                                id="capacity"
                                placeholder="capacity here"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Image URL</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="image"
                                id="image"
                                placeholder="image here"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Air conditioned</label
                            >
                            <input
                                type="checkbox"
                                name="is_air_conditioned"
                                id="is_air_conditioned"
                                value="1"
                            />
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">
                                Create a vehicle
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
