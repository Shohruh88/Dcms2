<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>
                            Home Page </h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('creator.index') }}" class="mr-2">Creator</a>
                        <a href="{{ route('subscriberfizik.index') }}" class="ml-1">Journal Magazine</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>