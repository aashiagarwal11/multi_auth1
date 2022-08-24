@include('header')

<body>
<div class="container-fluid">
    <div class="row content">
        @include('sidebar')

    <div class="col-sm-10">
    <h4>PROJECT MANAGER DETAILS</h4>
    <hr>  

    <div class="row">
        <div class="col-md-1">
            {{-- blank --}}
        </div>
        <div class="col-md-10">
            {{-- <h4> Display All Records <span><a class="btn btn-outline-primary" href="{{route('dynamicPdf')}}">Convert to PDF</a></span><span style="margin-left: 5px;"><a class="btn btn-outline-danger" href="{{route('dynamicexcel')}}">Convert to Excel</a></span></h4><br><hr><br> --}}
            <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr><th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->contact}}</td>
                    <td>{{$user->role}}</td>                                                         
                </tr>
                @endforeach
            </tbody> 
            </table>
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
