<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Thiago Mota') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        <h2 align="center">More Quotes</h2>
        <h4 align="center">
            These are 5 random Quotes 
            <a href="#" onclick="getFiveRandomQuotes()" title="Reload random Quotes"> <i class="fa fa-refresh"></i> </a>
        </h4>

        <div align="center" class="alert">
            <small><span id="dayQuote">Loading...</span></small>
        </div>

        <hr/>

        @auth
            <div align="center">
                <a class="btn btn-secondary" href="secure-quotes">All Quotes</a>
            </div>
        @else
           <div align="center">
                <h4>Wanna see more quotes??</h4>
                <a class="btn btn-primary" href="login">Login</a> 
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
        getFiveRandomQuotes();
    });
  </script>

</html>
