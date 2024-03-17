<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') || Dx-Blog</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet" />
    <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet" />
</head>

<body>
    @include('layout.header')

    <div class="container-fluid">
        <main class="tm-main">
            @yield('container')
            @include('layout.footer')
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>
