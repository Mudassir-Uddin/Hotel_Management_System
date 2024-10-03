<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('/dashboard/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('/dashboard/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/dashboard/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('/dashboard/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('/dashboard/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ url('/dashboard/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ url('/dashboard/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('/dashboard/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    {{-- Sweet Alert --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">

    <!-- Template Main CSS File -->
    <link href="{{ url('/dashboard/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ url('/dashboard/assets/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">DashBoard</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="{{ url('/dashboard/assets/img/messages-1.jpg') }}" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="{{ url('/dashboard/assets/img/messages-2.jpg') }}" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="{{ url('/dashboard/assets/img/messages-3.jpg') }}" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">
                    {{-- @if (session()->has('email')) --}}

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        {{-- <img src="{{ session()->get('img') }}" alt="Profile" --}}
                            {{-- class="rounded-circle"> --}}
                        {{-- <span class="d-none d-md-block dropdown-toggle ps-2">{{ session()->get('name') }}</span> --}}
                        {{-- @else --}}
                        {{-- <a href="{{ url('/login') }}" class="my-2" style="font-size:25px;">Login</a> --}}
                    </a><!-- End Profile Iamge Icon -->
                    {{-- @endif --}}
                    {{-- <span>Admin</span> --}}

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            {{-- <h6>{{ session()->get('name') }}</h6> --}}
                            {{-- <span>{{session()->get('role')==3 ?  "Visitor" : "Admin"}}</span> --}}
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Admindashboard') ? 'active' : '' }}"
                    href="{{ route('Admindashboard') }}">
                    <i class="bi bi-moon-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                {{-- <a class="nav-link collapsed"
                    class=" {{ request()->is('DbUsers') ? 'active' : '' }} || {{ request()->is('UsersInsert') ? 'active' : '' }}"
                    data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> --}}
                    <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
                {{-- </a> --}}
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        {{-- <a href="{{ route('DbUser') }}" class="{{ request()->is('DbUsers') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>All Users</span>
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="{{ route('UserInsert') }}"
                            class="{{ request()->is('UsersInsert') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>User Insert</span>
                        {{-- </a> --}}
                    </li>
                </ul>
            </li><!-- End Users Nav -->

            <li class="nav-item">
                {{-- <a class="nav-link collapsed {{ request()->is('DbClients') ? 'active' : '' }} || {{ request()->is('ClientsInsert') ? 'active' : '' }}"
                    data-bs-target="#components" data-bs-toggle="collapse" href="#"> --}}
                    <i class="bi bi-person"></i><span>Clients</span><i class="bi bi-chevron-down ms-auto"></i>
                {{-- </a> --}}
                <ul id="components" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        {{-- <a href="{{ route('DbClient') }}" class="{{ request()->is('DbClients') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>All Clients</span>
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="{{ route('ClientInsert') }}"
                            class="{{ request()->is('ClientsInsert') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>Clients Insert</span>
                        {{-- </a> --}}
                    </li>
                </ul>
            </li><!-- End Clients Nav -->


            <li class="nav-item">
                {{-- <a class="nav-link collapsed {{ request()->is('DbProjectClients') ? 'active' : '' }} || {{ request()->is('ProjectClientsInsert') ? 'active' : '' }}"
                    data-bs-target="#compon-nav" data-bs-toggle="collapse" href="#"> --}}
                    <i class="bi bi-menu-button-wide"></i><span>Clients Project</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                {{-- </a> --}}
                <ul id="compon-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        {{-- <a href="{{ route('DbProjectClient') }}"> --}}
                            {{-- <i class="bi bi-circle {{ request()->is('DbProjectClients') ? 'active' : '' }}"></i><span>All --}}
                                Clients Project</span>
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="{{ route('ProjectClientInsert') }}"> --}}
                            {{-- <i
                                class="bi bi-circle {{ request()->is('ProjectClientsInsert') ? 'active' : '' }}"></i><span>Clients
                                Project Insert</span>
                        </a> --}}
                    </li>
                </ul>
            </li><!-- End Client Project Nav -->

            <li class="nav-item">
                {{-- <a class="nav-link collapsed {{ request()->is('DbProjects') ? 'active' : '' }} || {{ request()->is('ProjectsInsert') ? 'active' : '' }}"
                    data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> --}}
                    <i class="bi bi-layout-text-window-reverse"></i><span>Projects</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                {{-- </a> --}}
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        {{-- <a href="{{ route('DbProject') }}"
                            class="{{ request()->is('DbProjects') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>All Projects</span>
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="{{ route('ProjectInsert') }}"
                            class="{{ request()->is('ProjectsInsert') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>Projects Insert</span>
                        {{-- </a> --}}
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                {{-- <a class="nav-link collapsed {{ request()->is('DbCategories') ? 'active' : '' }} || {{ request()->is('CategoriesInsert') ? 'active' : '' }}"
                    data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> --}}
                    <i class="bi bi-journal-text"></i><span>Categories</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                {{-- </a> --}}
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        {{-- <a href="{{ route('DbCategory') }}"
                            class="{{ request()->is('DbCategories') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>All Categories</span>
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="{{ route('CategoryInsert') }}"
                            class="{{ request()->is('CategoriesInsert') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>Category Insert</span>
                        {{-- </a> --}}
                    </li>
                </ul>
            </li><!-- End Category Nav -->

            
            <li class="nav-item">
                {{-- <a class="nav-link collapsed {{ request()->is('DbServices') ? 'active' : '' }} || {{ request()->is('ServicesInsert') ? 'active' : '' }}"
                    data-bs-target="#for" data-bs-toggle="collapse" href="#"> --}}
                    <i class="bi bi-journal-text"></i><span>Room Services</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                {{-- </a> --}}
                <ul id="for" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        {{-- <a href="{{ route('DbService') }}"
                            class="{{ request()->is('DbServices') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>All Services</span>
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="{{ route('ServiceInsert') }}"
                            class="{{ request()->is('ServicesInsert') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>Service Insert</span>
                        {{-- </a> --}}
                    </li>
                </ul>
            </li><!-- End Service Nav -->

            <li class="nav-item">
                {{-- <a class="nav-link collapsed {{ request()->is('DbTechnologies') ? 'active' : '' }} || {{ request()->is('TechnologiesInsert') ? 'active' : '' }}"
                    data-bs-target="#charts-nav" data-bs-toggle="collapse"> --}}
                    <i class="bi bi-bar-chart"></i><span>Technologies</span><i class="bi bi-chevron-down ms-auto"></i>
                {{-- </a> --}}
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        {{-- <a href="{{ route('DbTechnologie') }}"
                            class="{{ request()->is('DbTechnologies') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>All Technology</span>
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="{{ route('TechnologieInsert') }}"
                            class="{{ request()->is('TechnologiesInsert') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>Technology Insert</span>
                        {{-- </a> --}}
                    </li>
                </ul>
            </li><!-- End Technology Nav -->

            <li class="nav-item">
                {{-- <a class="nav-link collapsed {{ request()->is('DbClientsReviews') ? 'active' : '' }} || {{ request()->is('ClientsReviewsInsert') ? 'active' : '' }}" data-bs-target="#icons-nav" data-bs-toggle="collapse" > --}}
                    <i class="bi bi-gem"></i><span>Clients Reviews</span><i class="bi bi-chevron-down ms-auto"></i>
                {{-- </a> --}}
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        {{-- <a href="{{ route('DbClientsReview') }}" class="{{ request()->is('DbClientsReviews') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>All Clients Reviews</span>
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="{{ route('ClientsReviewInsert') }}" class="{{ request()->is('ClientsReviewsInsert') ? 'active' : '' }}"> --}}
                            <i class="bi bi-circle"></i><span>Clients Reviews Insert</span>
                        {{-- </a> --}}
                    </li>
                </ul>
            </li><!-- what_is_says_our_clients -->

            {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav --> --}}


      <li class="nav-item">
        {{-- <a class="nav-link collapsed {{ request()->is('DbContacts') ? 'active' : '' }} || {{ request()->is('ContactsInsert') ? 'active' : '' }}"
            data-bs-target="#charts-n" data-bs-toggle="collapse"> --}}
            <i class="bi bi-envelope"></i><span>User Contact</span><i class="bi bi-chevron-down ms-auto"></i>
        {{-- </a> --}}
        <ul id="charts-n" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                {{-- <a href="{{ route('DbContact') }}"
                    class="{{ request()->is('DbContacts') ? 'active' : '' }}"> --}}
                    <i class="bi bi-circle"></i><span>All User Contact</span>
                {{-- </a> --}}
            </li>
            <li>
                {{-- <a href="{{ route('ContactInsert') }}"
                    class="{{ request()->is('ContactsInsert') ? 'active' : '' }}"> --}}
                    <i class="bi bi-circle"></i><span>User Contact Insert</span>
                {{-- </a> --}}
            </li>
        </ul>
    </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li><!-- End Login Page Nav -->

            {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}

        </ul>

    </aside><!-- End Sidebar-->

    @yield('mydashboard')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Code Runner</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://www.youtube.com/@CodeRunnerSolution">Mudassir Uddin</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('/dashboard/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('/dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/dashboard/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ url('/dashboard/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ url('/dashboard/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ url('/dashboard/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ url('/dashboard/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('/dashboard/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>


    <!-- Template Main JS File -->
    <script src="{{ url('/dashboard/assets/js/main.js') }}"></script>

</body>

</html>
