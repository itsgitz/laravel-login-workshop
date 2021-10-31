<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page!</title>
</head>
<body>
    <div class="container">
        <h1>Hello from home!</h1>
        <a href="{{ route('users') }}">View list of users</a>
        @if (Auth::check())
        <div>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit()">Logout</a>
            </form>
        </div>
        @endif
    </div> 
</body>
</html>
