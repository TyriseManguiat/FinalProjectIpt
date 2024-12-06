<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App</title>

    <!-- Vite CSS -->
    @vite('resources/css/app.css')  <!-- Use the correct path to your CSS entry point -->
</head>
<body>
    <div id="app"></div>

    <!-- Vite JS -->
    @vite('resources/js/app.js')   <!-- Use the correct path to your JS entry point -->
</body>
</html>
