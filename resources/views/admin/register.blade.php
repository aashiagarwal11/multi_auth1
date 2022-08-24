@include('header')
<style>
    form{
            background-color: rgb(238, 236, 236);
            padding: 20px;
            }
            input,select{
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
<body>

<div class="container-fluid">
    <div class="row content">
        @include('sidebar')

    <div class="col-sm-10">
    <h4>REGISTRATION FORM</h4>
    <hr>  

    <div class="row">
        <div class="col-md-1">
            {{-- blank --}}
        </div>
        <div class="col-md-10">
            <h5 class="text-center"> {{session('message')}}</h5>
            <form action="{{route('register_data_post')}}" method="POST">
                @csrf             
                
                {{-- <h4 class="text-center pt-4"></h4> --}}
                <span style="color: red">@error('name'){{$message}}@enderror</span> <br>    
                <input type="text" name="name" value="{{old('name')}}" placeholder="Enter Name" ><br>
        
                <span style="color: red">@error('email'){{$message}}@enderror</span><br>                
                <input type="text" name="email" value="{{old('email')}}" placeholder="Enter Email" ><br>
        
                <span style="color: red">@error('password'){{$message}}@enderror</span> <br>    
                <input type="password" name="password" value="{{old('password')}}" placeholder="Enter Password" ><br>
        
                <span style="color: red">@error('contact'){{$message}}@enderror</span><br>                
                <input type="number" maxlength="10" name="contact" value="{{old('contact')}}" placeholder="Enter Contact" ><br>
            
                <span style="color: red">@error('role_id'){{$message}}@enderror</span><br>   
                <select name="role_id" id="role_id"  >
                    <option value="" selected disabled>Choose Role</option>
                
                    @foreach ($roles as $role )
                    <option value="{{$role->id}}">{{$role->role}}</option>
                    @endforeach                    
                </select><br><br>
                
                <input class="button" type="submit" name="submit"><br>
        
            </form>
        </div>
        <div class="col-md-1">
            {{-- blank --}}
        </div>

    </div>
    
    </div>
</div>
</div>
</body>
@include('footer')

