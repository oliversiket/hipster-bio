<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >   
</head>
<body> 
        <!-- Header Content -->
    <header>
        <h1>Hipster Bio Generator</h1>
        <h2>Generate your next hipster bio with just one click.</h2>
    </header>

        <!-- Main Content -->
    <main>
        <section class="bio-wrapper">
            <div>
                <!-- <h3> {{ $bios->bio->name }} </h3> -->
                <h3> {{ $bios->bio->content }} </h3>
                <a href="/bio"">Generate another one</a>
            </div>
            
        </section>
    </main>

        <!-- Footer Content -->
    <footer>

    </footer>
</body>
</html>
