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
        <a href={{ route('task2.create') }} class="btn btn-primary">Create</a>
        <div class="row g-2">


            @foreach ($all_data as $data)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $data->age }}</h6>
                            <p class="card-text">{{ $data->address }}</p>
                            <p class="card-text">{{ $data->location }}</p>
                            <div class="d-flex gx-2">
                                <a href={{ route('task2.show', $data->id) }} class="card-link btn btn-info">Edit</a>
                                <form method="POST" action={{ route('task2.destroy', $data->id) }}>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="card-link btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
