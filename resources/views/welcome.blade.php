<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://rawgithub.com/darkskyapp/skycons/master/skycons.js" defer></script>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="antialiased bg-blue-200">
    <div id="app" class="flex justify-center pt-16">
        <weather-app></weather-app>
    </div>
</body>

</html>
