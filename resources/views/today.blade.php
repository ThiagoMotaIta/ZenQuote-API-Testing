<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Thiago Mota') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap CDN (Only for this code challenge)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    </head>
    <body class="antialiased">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900" align="center">
                        Welcome to Quotes Website :)
                    </div>
                </div>
            </div>
        </div>

        <hr/>

        <h2 align="center">Quote of the Day</h2>

        <div align="center" class="alert alert-primary">
            <span id="dayQuote">Loading...</span>
        </div>

        <hr/>

        @auth
            <div align="center">
                <a class="btn btn-secondary" href="quotes">More Quotes</a>
            </div>
        @else
            <div align="center">
                <h4>First time here?!</h4>
                <a class="btn btn-secondary" href="quotes">More Quotes</a> or <a class="btn btn-primary" href="login">Login</a> 
            </div>
        @endauth

    </body>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <!-- System Features -->
    <script src="js/general.js"></script>

    <script type="text/javascript">
    $( document ).ready(function() {
        getQuoteOfDay();
    });
  </script>

</html>
