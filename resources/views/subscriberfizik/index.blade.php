<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriber Fizik</title>
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
                        <a href="{{ route('subscriberfizik.create') }}" class="btn btn-primary ml-4">Add Subscriber </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Middlename</th>
                                    <th>Email</th>
                                    <th>Tel Number</th>
                                    <th>User ID</th>
                                    <th>Yaratilgan vaqt</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscriberF as $subscriber)
                                    <tr>
                                        <td> {{ $subscriber->id }} </td>
                                        <td> {{ $subscriber->firstname }} </td>
                                        <td> {{ $subscriber->lastname }} </td>
                                        <td> {{ $subscriber->middlename }} </td>
                                        <td> {{ $subscriber->email }} </td>
                                        <td> {{ $subscriber->tel }} </td>
                                        <td> {{ $subscriber->user_id }} </td>
                                        <td> {{ date_format($subscriber->created_at, 'jS M Y') }} </td>
                                        <td>
                                            <form action="{{ route('subscriberfizik.destroy', ['subscriber' => $subscriber->id]) }}" method="POST">
                                                <a href="{{ route('subscriberfizik.edit', [ 'subscriber' => $subscriber->id]) }}" class="btn btn-primary">
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