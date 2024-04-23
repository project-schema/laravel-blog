<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1>Hello</h1>
    <a href={{ route('onkdin.create') }}>Create</a>
    <div class="row">
        @foreach ($data as $value)
            <div class="col-md-3">
                <div class="card">
                    <h5 class="card-header">{{ $value->body }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{ $value->text }}</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href={{ route('onkdin.show', $value->id) }} class="btn btn-primary">Edit</a>
                        <form method="POST" action={{ route('onkdin.destroy', $value->id) }}>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</body>

</html>
