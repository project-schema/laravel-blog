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
    <form action={{ route('onkdin.update', $data->id) }} method="POST" class="mx-auto" style="max-width: 500px">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <input placeholder="body" value={{ $data->body }} type="text" name="body" class="form-control mb-3">
            <input placeholder="text" value={{ $data->text }} type="text" name="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
