<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <title>Welcome to TODOParrot</title>
</head>
<body>
    <div class="container">
        <div class="col-md-9">
            @yield('content')
        </div>
        <div class="col-md-3">
            @section('advertisement')
                <p>
                    Jamz and Sun Lotion Special $29!
                </p>
                @show
        </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</body>
</html>