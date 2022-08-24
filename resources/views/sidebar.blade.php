<div class="col-sm-2 sidenav">
    <h3 style="color: red; padding-top:20px">{{Auth::user()->name}}</h3>
    <ul class="nav nav-pills nav-stacked">
    <li class="{{ Request::routeIs('register_page_get') ? 'active' : '' }}">
        <a class="nav-link " href="{{route('register_page_get')}}">Register</a>
    </li>
    <li class="{{ Request::routeIs('view_hr') ? 'active' : '' }}">
        <a class="nav-link " href="{{route('view_hr')}}">View HR</a>
    </li>
    <li class="{{ Request::routeIs('view_employee') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('view_employee')}}">View Employee</a>
    </li>
    <li class="{{ Request::routeIs('view_project_manager') ? 'active' : '' }}">
        <a class="nav-link " href="{{route('view_project_manager')}}">View Project Manager</a>
    </li>
    <li class="nav-item {{Request::routeIs('OrderDetails')? 'active' : ''}}">
        <a class="nav-link" href="{{route('OrderDetails')}}">Order</a>
    </li>
    <li class="{{ Request::routeIs('logout') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('logout')}}">Logout</a>
    </li>   
</ul><br>
</div>