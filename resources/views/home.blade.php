<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-center"> {{session('status')}}</h5>
                        <h5>Home Page For Login</h5>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('hr_login_form_page_get')}}"><button class="btn btn-primary">HR Login</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('other_login_form_page_get')}}"><button class="btn btn-primary">Other Login</button></a>
                            </li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </body>
</html>
