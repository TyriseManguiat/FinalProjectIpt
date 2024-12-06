<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/indexstyle.css') }}">
    <title>ICU</title>
</head>
<body>

<div class="login">
    @if ($errors->any())
        <div class="form">
            <h3>{{ $errors->first() }}</h3>
        </div>
    @endif
    
    <div class="form">
        <h1>LOG IN</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input type="text" name="username" placeholder="Username" required /><br>
            <input type="password" name="password" placeholder="Password" required />
            <br>
            <input name="submit" type="submit" value="Login" />
        </form>
        <p>Not registered yet? <a href="{{ route('register') }}">Register Here</a></p>
    </div>
</div>

</body>
</html>
