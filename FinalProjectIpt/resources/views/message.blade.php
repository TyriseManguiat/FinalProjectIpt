<!-- resources/views/message.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/messagestyle4.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ICU</title>
</head>
<body>
    <div class="bg-image">
        <img src="https://media1.giphy.com/media/twQYPSiVdcq3s2KFyo/200w.gif?cid=6c09b952eoruw4mzbm6d2skcmlagyxcvq1jlj11hpai8gynj&ep=v1_gifs_search&rid=200w.gif&ct=g" class="image">
    </div>
    
    <div class="box">
        <div class="contact">REACH US AT </div><br><br>

        <a href="#" class="fa fa-google" onclick="openNav()"></a>
        <a href="#" class="fa fa-instagram" onclick="openNav2()"></a>
        <a href="#" class="fa fa-facebook" onclick="openNav3()"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin" onclick="openNav4()"></a>
        <a href="{{ route('home') }}"><br><br>
            <button type="button" class="back">BACK</button><br>
        </a>

        <!-- Google Mail Sidebar -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="send">MAIL US AT </div>
            <br><br>
            <p>✉  iseeyou@gmail.com</p>
        </div>

        <!-- Instagram Sidebar -->
        <div id="mySidenav2" class="sidenav2">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
            <div class="send">INSTAGRAM ACCOUNT</div>
            <br><br>
            <p>📱 iseeyou2024</p>
        </div>

        <!-- Facebook Sidebar -->
        <div id="mySidenav3" class="sidenav3">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
            <div class="send">FACEBOOK ACCOUNT</div>
            <br><br>
            <p>💻  I See You 2024</p>   
        </div>

        <!-- LinkedIn Sidebar -->
        <div id="mySidenav4" class="sidenav4">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
            <div class="send">LINKEDIN ACCOUNT</div>
            <br><br>
            <p class="p">💻  linkedin.com/in/I-See-You-123904014</p>   
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "1327px";
            document.getElementById("mySidenav").style.height = "260px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        function openNav2() {
            document.getElementById("mySidenav2").style.width = "1327px";
            document.getElementById("mySidenav2").style.height = "260px";
        }
        function closeNav2() {
            document.getElementById("mySidenav2").style.width = "0";
        }
        function openNav3() {
            document.getElementById("mySidenav3").style.width = "1327px";
            document.getElementById("mySidenav3").style.height = "260px";
        }
        function closeNav3() {
            document.getElementById("mySidenav3").style.width = "0";
        }
        function openNav4() {
            document.getElementById("mySidenav4").style.width = "1327px";
            document.getElementById("mySidenav4").style.height = "260px";
        }
        function closeNav4() {
            document.getElementById("mySidenav4").style.width = "0";
        }
    </script>
</body>
</html>
