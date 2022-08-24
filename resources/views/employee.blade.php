@include('header')

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-center"> {{session('status')}}</h5>
                        <h4>Employee Dashboard</h4>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <h6 style="color: red; padding-top:20px">{{Auth::user()->name}}</h6>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('logout')}}"><button class="btn btn-primary">Logout</button></a>
                            </li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </body>
    @include('footer')
