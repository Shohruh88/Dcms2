<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Creator </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <div style="width: 80%;display:inline-block;" class="header">
                            <h3>All Creators</h3>
                        </div>
                        <a href="{{ route('creator.create') }}" class="btn btn-primary ml-4">Add Creators</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Desciption</th>
                                    <th>Yaratilgan vaqt</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($creators as $creator)
                                    <tr>
                                        <td> {{ ($loop->index + 1) }} </td>
                                        <td> <a href="{{ route('creator.show', [$creator->id]) }}">{{ $creator->firstname }}</a> </td>
                                        <td> {{ $creator->lastname }} </td>
                                        <td> {{ $creator->description }} </td>
                                        <td>{{ date_format($creator->created_at, 'jS M Y') }} </td>
                                        <td>
                                        <form action="{{ route('creator.destroy', ['creator' => $creator->id]) }}" method="POST">
                                            <a href="{{ route('creator.edit', [ 'creator' => $creator->id]) }}" class="btn btn-primary">
                                                Edit
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>