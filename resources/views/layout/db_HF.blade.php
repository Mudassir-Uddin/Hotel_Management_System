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

    @php
        use Illuminate\Support\Facades\Session;
        $userRole = '';
        if (Session::has('role')) {
            $userRole = Session::get('role');
        }
    @endphp

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
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        @php

                            use App\Models\User;
                            use App\Models\Users;
                            use Illuminate\Http\Request;
                            use Illuminate\Support\Facades\DB;
                            use Illuminate\Support\Facades\Hash;
                            // use Illuminate\Support\Facades\Session;
                            $user = users::where('id', Session::get('id'))->first();
                        @endphp
                        @if ($user)
                            {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">     --}}
                            <img class="rounded-circle me-lg-2" src="{{ $user->img }}" alt=""
                                style="width: 40px; height: 40px;">
                        @endif

                        @if (session()->has('email'))
                            @if ($user)
                                <span class="fw-bolder d-none d-lg-inline-flex">{{ $user->name }}</span>
                                <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                            @endif
                        @endif
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            @if (session()->has('email'))
                                @if ($user)
                                    <h6>{{ $user->name }}</h6>
                                    <span>{{ $user->role == 2 ? 'user' : 'Admin' }}</span>
                                @endif
                            @endif
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            @if (session()->has('email'))
                                @if ($user)
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="{{ url('/Profileedit') }}/{{ $user->id * 548548 }}">
                                        <i class="bi bi-person"></i>
                                        <span>My Profile</span>
                                    </a>
                                @endif
                            @endif
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/') }}">
                                <i class="bi bi-gear"></i>
                                <span>Website</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/logout') }}">
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
            @if ($userRole == 1 || $userRole == 3)
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('Admindashboard') ? 'active' : '' }}"
                        href="{{ route('Admindashboard') }}">
                        <i class="bi bi-moon-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed"
                        class=" {{ request()->is('Dbguests') ? 'active' : '' }} || {{ request()->is('guestsInsert') ? 'active' : '' }}"
                        data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-person"></i><span>guests</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('Dbguest') }}"
                                class="{{ request()->is('Dbguests') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>All guests</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('guestInsert') }}"
                                class="{{ request()->is('guestsInsert') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Guest Insert</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Users Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed {{ request()->is('Dbrooms') ? 'active' : '' }} || {{ request()->is('roomsInsert') ? 'active' : '' }}"
                        data-bs-target="#components" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Rooms</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('Dbroom') }}" class="{{ request()->is('Dbrooms') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>All Rooom</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('roomInsert') }}"
                                class="{{ request()->is('roomsInsert') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Rooms Insert</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Clients Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed {{ request()->is('Dbreservations') ? 'active' : '' }} || {{ request()->is('reservationsInsert') ? 'active' : '' }}"
                        data-bs-target="#compon-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Reservation</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="compon-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('Dbreservation') }}">
                                <i
                                    class="bi bi-circle {{ request()->is('Dbreservations') ? 'active' : '' }}"></i><span>All
                                    Reservation</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('reservationInsert') }}">
                                <i
                                    class="bi bi-circle {{ request()->is('reservationsInsert') ? 'active' : '' }}"></i><span>Reservation
                                    Insert</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Reservation Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed {{ request()->is('Dbpayments') ? 'active' : '' }} || {{ request()->is('paymentsInsert') ? 'active' : '' }}"
                        data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>payments</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('Dbpayment') }}"
                                class="{{ request()->is('Dbpayments') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>All payments</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('paymentInsert') }}"
                                class="{{ request()->is('paymentsInsert') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>payments Insert</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed {{ request()->is('Dbstaffs') ? 'active' : '' }} || {{ request()->is('staffsInsert') ? 'active' : '' }}"
                        data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>staffs</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('Dbstaff') }}"
                                class="{{ request()->is('Dbstaffs') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>All staffs</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('staffInsert') }}"
                                class="{{ request()->is('staffsInsert') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>staff Insert</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End staff Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed {{ request()->is('DBUsers') ? 'active' : '' }} || {{ request()->is('UsersInsert') ? 'active' : '' }}"
                        data-bs-target="#for" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-person"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="for" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('DbUser') }}" class="{{ request()->is('DBUsers') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>All Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('UserInsert') }}"
                                class="{{ request()->is('UsersInsert') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>User Insert</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Service Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed {{ request()->is('DbContacts') ? 'active' : '' }} || {{ request()->is('ContactsInsert') ? 'active' : '' }}"
                        data-bs-target="#charts-n" data-bs-toggle="collapse">
                        <i class="bi bi-envelope"></i><span>User Contact</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="charts-n" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('DbContact') }}"
                                class="{{ request()->is('DbContacts') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>All User Contact</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('ContactInsert') }}"
                                class="{{ request()->is('ContactsInsert') ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>User Contact Insert</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Contact Page Nav -->
            @endif

            @if ($userRole == 2)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Profileedit') }}/{{ $user->id * 548548 }}">
                        <i class="bi bi-moon-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed " href="{{ url('/') }}">
                        <i class="bi bi-gem"></i><span>Website</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed " href="{{ url('/rooms') }}">
                        <i class="bi bi-bar-chart"></i><span>Rooms</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed " href="{{ url('/about') }}">
                        <i class="bi bi-layout-text-window-reverse"></i><span>About Us</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed " href="{{ url('/contactus') }}">
                        <i class="bi bi-envelope"></i><span>Contact Us</span>
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/register') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/login') }}">
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
