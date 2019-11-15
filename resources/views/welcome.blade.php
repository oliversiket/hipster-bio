<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hipster Bio Generator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    </head>
    <body>
        <h1>Choose your generator:</h1>

        <a href="/bio" class="hipster-card-link">
            <div class="card">
            <img src="{{ asset('images/hipster-preview.png') }}" alt="hipster-preview" style="width:100%">
            <div class="container">
                <h4><b>Hipster Bio</b></h4>
                <p>Randomly generates new hipster bio</p>
            </div>
            </div>
        </a>
    </body>
</html>
