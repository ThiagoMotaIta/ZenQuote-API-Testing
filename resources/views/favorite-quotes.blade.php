<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Thiago Mota') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap CDN (Only for this code challenge)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    </head>
    <body class="antialiased">
        <input type="hidden" id="logged-id" value="{{Auth::user()->id}}">
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

        <h2 align="center">Hi, {{ Auth::user()->name }}.</h2>
        <h4 align="center">These are your Favorite Quotes</h4>

        <div align="right" class="alert">

            <a href="secure-quotes" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Back
            </a>

            <a href="report-favorite-quotes" class="btn btn-danger">
                <i class="fa fa-users"></i> All Users Favorite Quotes
            </a>
 
        </div>

        <hr/>

        <div align="center" class="alert">
            <small><span id="dayQuote">Loading...</span></small>
        </div>

        <div align="center">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="fa fa-sign-out text-danger"></i>
                </x-dropdown-link>
            </form> 
        </div>

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
        getMyFavoriteQuotes();
    });
  </script>

</html>
