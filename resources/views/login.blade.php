<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login page</h1>

        @error('email')
        <div class="error">
           <p>{{ $message }}</p> 
        </div>
        @enderror

        <form method="post" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <div>
                <input type="submit" value="login">
            </div>
        </form>
        <div>
            <a href="{{ route('home') }}">Home</a>
        </div>
    </div> 
</body>
</html>
