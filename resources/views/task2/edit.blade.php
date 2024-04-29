<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <div class="container">
        <a href={{ route('task2.index') }} class="btn btn-primary">All</a>
        <div class="row g-2">


            <div class="col-md-6">
                <form action={{ route('task2.update', $data->id) }} method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value={{ $data->name }} name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="text" value={{ $data->age }} name="age" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" value={{ $data->address }} name="address" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" value={{ $data->location }} name="location" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
