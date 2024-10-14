@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li>
                                            <a href="{{ route('Dbroom') }}"
                                                class="{{ request()->is('Dbrooms') ? 'active' : '' }} dropdown-item">
                                                All Rooms
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('roomInsert') }}"
                                                class="{{ request()->is('roomsInsert') ? 'active' : '' }}  dropdown-item">
                                                Room Insert
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Rooms <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-life-preserver"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $RValue }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li>
                                            <a href="{{ route('Dbguest') }}"
                                                class="{{ request()->is('Dbguests') ? 'active' : '' }} dropdown-item">
                                                All Guests
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('guestInsert') }}"
                                                class="{{ request()->is('guestsInsert') ? 'active' : '' }}  dropdown-item">
                                                Guest Insert
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Guests <span>| This Month</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-hearts"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $GValue }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Client Card -->
                        <div class="col-xxl-4 col-xl-6">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li>
                                            <a href="{{ route('Dbstaff') }}"
                                                class="{{ request()->is('Dbstaffs') ? 'active' : '' }} dropdown-item">
                                                All Staffs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('staffInsert') }}"
                                                class="{{ request()->is('staffsInsert') ? 'active' : '' }} dropdown-item">
                                                Staffs Insert
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Staffs <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-laptop"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $SValue }}</h6>
                                            {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Client Card -->

                        <!-- Project-Client Card -->
                        <div class="col-xxl-4 col-xl-6">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li>
                                            <a href="{{ route('DbUser') }}"
                                                class="{{ request()->is('DbUsers') ? 'active' : '' }} dropdown-item">
                                                All Users
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('UserInsert') }}"
                                                class="{{ request()->is('UsersInsert') ? 'active' : '' }} dropdown-item">
                                                User Insert
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Users <span>| This Month</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $UValue }}</h6>
                                            {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Project-Client Card -->

                        <!-- Recent payment -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li>
                                            <a href="{{ route('Dbpayment') }}"
                                                class="{{ request()->is('Dbpayments') ? 'active' : '' }} dropdown-item">
                                                All Payments
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('paymentInsert') }}"
                                                class="{{ request()->is('paymentsInsert') ? 'active' : '' }}  dropdown-item">
                                                Payment Insert
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Payments <span>| Weekly</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                {{-- <th scope="col">#</th> --}}
                                                <th scope="col">Guest Name</th>
                                                <th scope="col">Payment Method</th>
                                                <th scope="col">Amount Paid</th>
                                                <th scope="col">Date Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($recentRecords as $pt)
                                                <tr>

                                                    <td><a href=""
                                                            class="text-primary fw-bold">{{ $pt->reservation->guests->name }}</a>
                                                    </td>
                                                    <td>
                                                        @if ($pt->payment_method == 1)
                                                            <option value="1">Credit Card</option>
                                                        @elseif ($pt->payment_method == 2)
                                                            <option value="2">Debit Card</option>
                                                            {{-- @endforeach --}}
                                                        @elseif ($pt->payment_method == 3)
                                                            <option value="3">Cash</option>
                                                        @else
                                                            <option value="4">Online Transfer</option>
                                                        @endif
                                                    </td>
                                                    <td>{{ $pt->amount_paid }}</td>
                                                    <td>{{ $pt->updated_at = date('Y-m-d') }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li>
                                            <a href="{{ route('Dbreservation') }}"
                                                class="{{ request()->is('Dbreservations') ? 'active' : '' }} dropdown-item">
                                                All Reservations
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('reservationInsert') }}"
                                                class="{{ request()->is('reservationsInsert') ? 'active' : '' }}  dropdown-item">
                                                Reservation Insert
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Recent Reservation <span>| Weekly</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Room</th>
                                                <th scope="col">In Date</th>
                                                <th scope="col">Out Date</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($recentReservation as $cl)
                                                <tr>

                                                    <td>{{ $cl->guests->name }}</td>
                                                    <td>{{ $cl->rooms->room_number }}</td>
                                                    <td>{{ $cl->check_in_date }}</td>
                                                    <td>{{ $cl->check_out_date }}</td>
                                                    <td>{{ $cl->total_amount }}</td>
                                                    <td>
                                                        @if ($cl->status == 1)
                                                            <option value="1">Booked</option>
                                                        @elseif ($cl->status == 2)
                                                            <option value="2">Checked-In</option>
                                                            {{-- @endforeach --}}
                                                        @else
                                                            <option value="3">Cancelled</option>
                                                        @endif
                                                    </td>
                                                    <td>{{ $cl->updated_at = date('Y-m-d') }}</td>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">


                    <!-- News & Updates Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li>
                                    <a href="{{ route('Dbroom') }}"
                                        class="{{ request()->is('Dbrooms') ? 'active' : '' }} dropdown-item">
                                        All Rooms
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('roomInsert') }}"
                                        class="{{ request()->is('roomsInsert') ? 'active' : '' }}  dropdown-item">
                                        Room Insert
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Rooms <span>| Today</span></h5>

                            <div class="news">
                                @foreach ($recentRoom as $rt)
                                    <div class="post-item clearfix">
                                        <img style="width:80px; hight:100px; " src="/{{ $rt->img }}" alt="">
                                        
                                        <h4>PRICE : {{ $rt->price_per_night }}</h4>
                                        <h4><a href="#">
                                            @if ($rt->availability_status == 1)
                                                <option value="1">Available</option>
                                            @elseif ($rt->availability_status == 2)
                                                <option value="2">Occupied</option>
                                                {{-- @endforeach --}}
                                            @else
                                                <option value="3">Under Maintenance</option>
                                            @endif
                                        </h4>

                                        {{-- <td>{{ $rt->updated_at = date('Y-m-d') }}</td> --}}
                                    </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
