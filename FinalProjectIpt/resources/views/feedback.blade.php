<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/feedbackstyle.css') }}">
    <title>DIARY DISPLAY</title>
</head>
<body>
    <div class="box1">
        <img src="https://media1.giphy.com/media/twQYPSiVdcq3s2KFyo/200w.gif?cid=6c09b952eoruw4mzbm6d2skcmlagyxcvq1jlj11hpai8gynj&ep=v1_gifs_search&rid=200w.gif&ct=g"
            class="image">
        <div class="clipart-container">
            <img class="logo" src="{{ asset('images/logo.png') }}" />
        </div>
    </div>

    <div class="box2">
        @if(session('success'))
            <p style="color: #1F509A; font-size: 18px;">{{ session('success') }}</p>
        @endif

        <form action="{{ route('feedback') }}" method="post">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="dropdown-container">
                <div class="main">
                    <div class="name">AGE</div><br>
                    <select name="age" class="USER1" required>
                        <option value="below 18">Below 18</option>
                        <option value="18-24">18-24</option>
                        <option value="25-34">25-34</option>
                        <option value="35-44">35-44</option>
                        <option value="45-54">45-54</option>
                        <option value="55-64">55-64</option>
                        <option value="65 and Above">65 and Above</option>
                    </select>
                </div>
                <div class="main">
                    <div class="name">FEEDBACK TYPE</div><br>
                    <select name="feedback_type" class="USER1" required>
                        <option value="Suggestion">Suggestion</option>
                        <option value="Bug">Bug</option>
                        <option value="General">General</option>
                    </select>
                </div>
            </div>
            <br><br>

            <textarea name="Remarks" placeholder="Tell us more..."></textarea><br><br>

            <div class="button-container">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/start.png') }}" alt="Start" class="icon" />
                </a>
                <button type="submit" name="submit" class="submit-button">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
