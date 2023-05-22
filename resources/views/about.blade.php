<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    <header>
        <a href="/">Home</a>
        <a href="/about">About</a>
    </header>

    <main>
        <h1>
            {{ $about_me['name'] }} About Page
        </h1>

        <ul>
            @foreach ($about_me as $me)
                <li>
                    {{ $me }}
                </li>
            @endforeach
        </ul>


    </main>


</body>

</html>
