<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Subscriber Fizik </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="header" style="width: 80%; display:inline-block;">
                            <h3>Add Creator</h3>
                        </div>
                        <a href="{{ route('subscriberfizik.index') }}" class="btn btn-primary ml-4">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subscriberfizik.store') }}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" >
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" >
                            </div>
                            <div class="form-group">
                                <label for="middlename">Middlename</label>
                                <input type="text" class="form-control" name="middlename" id="middlename" >
                            </div>
                            <div class="form-group">
                                <label for="tel">Tel Number</label>
                                <input type="tel" name="tel" id="tel" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" >
                            </div>
                            <div class="form-group">
                                <label for="user_id">User ID</label>
                                <input type="text" class="form-control" name="user_id" id="user_id" >
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add Creator" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>