<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
    <title>Register</title>
</head>
<body>
    <div class="login">
        <div class="form">
            <h1>REGISTER</h1>

            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="form">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Registration Form -->
            <form action="{{ route('register') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Name" required value="{{ old('name') }}" />
                <input type="text" name="username" placeholder="Username" required value="{{ old('username') }}" />
                <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" />
                <input type="password" name="password" placeholder="Password" required />
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                <input type="tel" name="phoneNumber" placeholder="Phone no." required value="{{ old('phoneNumber') }}" />
                <input type="text" name="diaryName" placeholder="Name your Diary" value="{{ old('diaryName') }}" />
                <input type="submit" name="submit" value="Register" />
            </form>

            <p>Already have an Account? <a href="{{ route('login') }}">Log In</a></p>
        </div>
    </div>
</body>
</html>
