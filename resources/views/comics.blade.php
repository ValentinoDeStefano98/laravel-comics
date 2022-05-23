<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Comics</title>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <img src="{{ asset('images/dc-logo.png') }}" alt="Logo" class="logo">
            <ul>
                <li>
                    <a href="#">Characters</a>
                </li>
                <li>
                    <a href="{{ route('comics') }}">Comics</a>
                </li>
                <li>
                    <a href="#">Movies</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>
                <li>
                    <a href="#">Games</a>
                </li>
                <li>
                    <a href="#">Collectibles</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Fans</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                </li>
            </ul> 
        </div>
        <div class="jumbotron">

        </div>
        
    </header>
    <!-- Main -->
    <main>
        @foreach ($comic as $product)
            <p>{{ $product['title'] }}</p>
        @endforeach
    </main>
    <!-- Footer -->
</body>
</html>