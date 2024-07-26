<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Create Driver</title>
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
                    <h5 class="card-title">Create New Driver</h5>
                    <form action="/driver" method="post">
                        @csrf
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Fullname</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                placeholder="name here"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Phone no.</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="phone_no"
                                id="phone_no"
                                placeholder="phone here"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Age</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="age"
                                id="age"
                                placeholder="age here"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Years of Experience</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="years_of_experience"
                                id="years_of_experience"
                                placeholder="years of experience in here"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >License No.</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="license_no"
                                id="license_no"
                                placeholder="time out here"
                            />
                        </div>

                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Not Available?</label
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
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Create a driver
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
