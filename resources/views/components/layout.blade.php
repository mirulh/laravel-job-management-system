<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Position</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js'])
{{--    for bootstrap--}}
    @vite(['resources/css/app.css'])
</head>
<body class="text-white hanken-grotesk-font" style="background-color: #060606">

<div class="px-5">
    <nav class="d-flex justify-content-between align-items-center py-3 border-bottom border-white border-opacity-10">
        <div><a href="/">
                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg')}}" alt="">
            </a></div>
        <div class="d-flex gap-5 fw-bold remove-link-decoration">
            <a href="">Jobs</a>
            <a href="">Careers</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>
        <div class="remove-link-decoration">
            <a href="">Post a Job</a>
        </div>
    </nav>
    <main class="mt-5 mx-auto" style="max-width: 986px">
        {{$slot}}
    </main>
</div>

@vite('resources/js/app.js')
</body>
</html>
