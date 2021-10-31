<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Lists</title>
</head>
<body>
    <div class="container">
        <h1>Users List:</h1> 
        @foreach ($users as $u)
        <p>{{ $u->name }} | {{ $u->email }}</p>
        @endforeach
        <div>
            <a href="{{ route('home') }}">Home</a>
        </div>
    </div>
</body>
</html>
