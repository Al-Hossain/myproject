<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Car ShowRoom<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - HOME -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Add Cars Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Car Info</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Car Info:</h6>
                <a class="collapse-item" href="{{url('/addcardetails')}}">Add Car Details</a>
                <a class="collapse-item" href="{{url('/managecardetails')}}">Manage Car Details</a>
            </div>
        </div>
    </li>
      <!-- Nav Item - Transmission Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-cookie"></i>
            <span>Company Info</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Company Info:</h6>
                <a class="collapse-item" href="{{url('/addcompany')}}">Add Company</a>
                <a class="collapse-item" href="{{url('/managecompany')}}">Manage Company</a>
            </div>
        </div>
    </li>
     <!-- Nav Item - Color Collapse Menu -->
     {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="true" aria-controls="collapseFour">
            <i class="fab fa-500px"></i>
            <span>Color</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Exterior color:</h6>
                <a class="collapse-item" href="Ash.html">Ash</a>
                <a class="collapse-item" href="Black.html">Black</a>
                <a class="collapse-item" href="Blue.html">Blue</a>
                <a class="collapse-item" href="Red.html">Red</a>
                <h6 class="collapse-header">Interior color:</h6>
                <a class="collapse-item" href="Ashl.html">Ash</a>
                <a class="collapse-item" href="Black.html">Black</a>
                <a class="collapse-item" href="Blue.html">Blue</a>
                <a class="collapse-item" href="Grey.html">Grey</a>
                <a class="collapse-item" href="Red.html">Red</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Year Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseYear"
            aria-expanded="true" aria-controls="collapseYear">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Year</span>
        </a>
        <div id="collapseYear" class="collapse" aria-labelledby="headingYear"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Year:</h6>
                <a class="collapse-item" href="Year 2010.html">2010</a>
                <a class="collapse-item" href="Year 2011.html">2011</a>
                <a class="collapse-item" href="Year 2012.html">2012</a>
                <a class="collapse-item" href="Year 2013.html">2013</a>
                <a class="collapse-item" href="Year 2014.html">2014</a>
                <a class="collapse-item" href="Year 2015.html">2015</a>
                <a class="collapse-item" href="Year 2016.html">2016</a>
                <a class="collapse-item" href="Year 2017.html">2017</a>
                <a class="collapse-item" href="Year 2018.html">2018</a>
                <a class="collapse-item" href="Year 2019.html">2019</a>
                <a class="collapse-item" href="Year 2020.html">2020</a>
                <a class="collapse-item" href="Year 2021.html">2021</a>
                <var><var><var><var>v</var></var></var></var>
                <var><var>c</var></var>
            </div>
        </div>
    </li> --}}
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Others
     </div>
       <!-- Nav Item - Services Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
            aria-expanded="true" aria-controls="collapseFive">
            <i class="fab fa-airbnb"></i>
            <span>Services</span>
        </a>
        
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Service Type:</h6>
                <a class="collapse-item" href="{{url('/generalservices')}}">General Services</a>
                <a class="collapse-item" href="{{url('/queries')}}">Queries</a>
            </div>
        </div>
    </li>

       <!-- Nav Item - About Us Collapse Menu -->
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/aboutus')}}">
                 <i class="fab fa-adn"></i>
                 <span>About Us</span>
                </a>
    </li>
    <!-- Nav Item - Contact Us Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/contactus')}}"> 
            <i class="fab fa-algolia"></i>
            <span>Contact Us</span>
        </a>
    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    {{-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{url('Backend/img/undraw_rocket.svg')}}" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>