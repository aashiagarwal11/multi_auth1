@include('header')
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-center"> {{session('status')}}</h5>
                        <h4>Logout page</h4>                        
                    </div>                    
                </div>
            </div>
        </div>
    </body>
@include('footer')
