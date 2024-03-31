<!-- ======= Sidebar ======= -->

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            </a>
            <a class="nav-link {{ (request()->segment(2) == 'dashboard')? '' : 'collapsed'}}" href="{{url('/admin/dashboard')}}"><i class="bi bi-house-door-fill"></i><span>Dashboard</span>
            </a>
        </li>
        @can('read')
        <li class="nav-item">
            
            <a class="nav-link {{ (request()->segment(2) == 'category')? '' : 'collapsed'}}" href="{{url('/category')}}"><i class="bi bi-house-door-fill"></i><span>Category</span>
            </a>
        </li>
        @endcan
       
    </ul>

    

</aside><!-- End Sidebar-->
