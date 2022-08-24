@include('header')
<style>
    form{
            background-color: #ddd;
            padding: 20px;
            }
            input,select,textarea{
                display: block;
                height: 50px;
                width: 100%;
                padding: 0 10px;
                border: none;
                /* margin: 0 45px; */
                font-size: 14px;
            }  
            .button{
                width: 100%;
                background-color: #cadae7;
                color: #080710;
                padding:0 10px;
                font-size: 16px;
                font-weight: 600;
                border-radius: 5px;
                cursor: pointer;
            }

            .button:hover{
                width: 100%;
                background-color: #a5c1d8;
                color: #080710;
                cursor: pointer;
            }

            /* span{
                margin-left: 50px;
            } */

</style>
<body>

<div class="container-fluid">
    <div class="row content">
        {{-- @include('sidebar') --}}

    <div class="col-sm-10">
    
    <hr>  

    <div class="row">
        <div class="col-md-4">
            {{-- blank --}}
        </div>
        <div class="col-md-6">
            <h2 class="text-center"><strong>SEND MAIL</strong></h2>
            <h5 class="text-center"> {{session('message')}}</h5>
            <form action="{{route('send_email')}}" method="POST">
                @csrf             
                
                {{-- <h4 class="text-center pt-4"></h4> --}}
                <span style="color: red">@error('name'){{$message}}@enderror</span> <br>    
                <input type="text" name="name" value="{{old('name')}}" placeholder="Enter Name" ><br>
        
                <span style="color: red">@error('email'){{$message}}@enderror</span><br>                
                <input type="text" name="email" value="{{old('email')}}" placeholder="Enter Email" ><br>
        
                <span style="color: red">@error('subject'){{$message}}@enderror</span> <br>    
                <input type="text" name="subject" value="{{old('subject')}}" placeholder="Enter Subject" ><br>
        
                <span style="color: red">@error('content'){{$message}}@enderror</span><br>   
                <textarea name="content" type="text" value="{{old('content')}}" id="content" cols="30" rows="10" placeholder="Enter Message"></textarea>             
                <br><br>
                
                <input class="button" type="submit" name="submit"><br>
        
            </form>
        </div>
        <div class="col-md-2">
            {{-- blank --}}
        </div>

    </div>
    
    </div>
</div>
</div>
</body>
@include('footer')

