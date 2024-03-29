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
    <a class="btn btn-primary" href={{ route('crud.index') }}>All </a>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action={{ route('crud.update') }} method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input value={{ $data->name }} type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input value={{ $data->age }} type="text" name="age" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
