@include('header')
<body>
<div class="container-fluid">
    <div class="row content">
        @include('sidebar')

    <div class="col-sm-10">        
        <h4>HR Dashboard</h4>
    <hr> 
    
        <h5 class="text-center"> {{session('message')}}</h5>
        <h5 class="text-center"> {{session('status')}}</h5> 
    </div>
</div>
</div>

</body>

@include('footer')
