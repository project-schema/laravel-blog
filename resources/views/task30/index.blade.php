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
    <a href={{ route('task30.create') }}>Create</a>

    <div class="container">
        <div class="row">
            @foreach ($data as $value)
                <div class="col-md-6 col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $value->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $value->age }}</h6>

                            <a href={{ route('task30.edit', $value->id) }} class="card-link">Edit</a>
                            <form action={{ route('task30.destroy', $value->id) }} method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="card-link">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
