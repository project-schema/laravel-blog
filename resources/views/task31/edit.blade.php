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

    <div class="container">
        <div class="row">
            <form method="POST" action={{ route('task31.update', $data->id) }}>
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Name</label>
                    <input value={{ $data->name }} name="name" type="text" class="form-control"
                        placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input value={{ $data->age }} name="age" type="text" class="form-control"
                        placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
