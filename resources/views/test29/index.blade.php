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
            @foreach ($data as $i)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            {{ $i->name }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $i->location }}</h5>
                            <p class="card-text">{{ $i->age }}
                            </p>
                            <form method="post" action={{ route('test29.destroy', $i->id) }}>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href={{ route('test29.edit', $i->id) }} class="btn btn-info">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
