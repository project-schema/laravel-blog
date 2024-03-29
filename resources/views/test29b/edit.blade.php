<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Hello, world!</h1>
    <a class="btn btn-primary" href={{ route('test29.create') }}>Crete</a>

    <div class="container">
        <div class="row">

            <form action={{ route('test29b.update', $data->id) }} method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input value={{ $data->name }} name="name" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input value={{ $data->age }} name="age" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input value={{ $data->city }} name="city" type="text" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
