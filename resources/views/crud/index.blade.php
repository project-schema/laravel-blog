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
    <a href={{ route('crud.create') }} class="btn btn-primary">Create</a>

    <div class="container">
        <div class="row">
            @foreach ($data as $value)
                <div class="card">
                    <div class="card-header">
                        {{ $value->name }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> {{ $value->age }}</h5>
                        <a href={{ route('crud.edit', $value->id) }} class="btn btn-primary">Edit</a>
                        <form action={{ route('crud.destroy', $value->id) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary">delelte</a>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
