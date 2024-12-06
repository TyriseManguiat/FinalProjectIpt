<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="start.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ICU</title>
</head>

<body>
<div class="bg-image">
    <div class="clipart-container">
        <img class="clipart" src="logo.png"/>
    </div>
</div>

<div class="login">
    <button class="button" onclick="redirectToDiary()">
        <span>Start</span>
    </button>
    <br><br><br>

    <!-- Logout Form -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
</div>

<div class="icon-bar">
    <a href="logout.php"><i class="fa fa-home"></i></a>
    <a href="display.php"><i class="fa fa-calendar"></i></a>
    <a href="message.php"><i class="fa fa-envelope"></i></a>
    <a href="feedback.php"><i class="fa fa-pencil"></i></a>
</div>

<script>
    function redirectToDiary() {
        window.location.href = "basicdiary.php";
    }
</script>

</body>
</html>
