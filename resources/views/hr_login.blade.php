@include('header')

        <style>
            form{
                background-color: rgb(238, 236, 236);
                padding: 20px;
            }
            input{
                display: block;
                height: 50px;
                width: 80%;
                padding: 0 10px;
                border: none;
                margin: 0 45px;
                font-size: 14px;
            }        

            .button{
                width: 80%;
                background-color: #e7caca;
                color: #080710;
                padding:0 10px;
                font-size: 16px;
                font-weight: 600;
                border-radius: 5px;
                cursor: pointer;
            }

            span{
                margin-left: 50px;
            }
        </style>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="container">
                <div class="row">
                <div class="col-md-3">
                    {{-- blank --}}
                </div>

                <div class="col-md-6">
                    <h3 class="text-center"> {{session('status')}}</h3>
                    <h5 class="text-center"> {{session('message')}}</h5>
                    <form action="" method="POST">
                        @csrf             
                        
                        <h4 class="text-center pt-4 mt-5">Admin Login</h4>
                        <span style="color: red">@error('email'){{$message}}@enderror</span><br>                
                        <input type="text" name="email" placeholder="Enter Email" ><br>

                        <span style="color: red">@error('password'){{$message}}@enderror</span> <br>    
                        <input type="text" name="password" placeholder="Enter Password" ><br>
                        
                        <input class="button" type="submit" name="submit"><br>

                    </form>
                </div>

                <div class="col-md-3">
                    {{-- blank --}}
                </div>
            </div>            
            </div>            
        </div>
    </body>
    @include('footer')
