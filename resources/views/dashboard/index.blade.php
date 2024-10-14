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
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Services <span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-life-preserver"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$SValue}}</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                      class="{{ request()->is('UsersInsert') ? 'active' : '' }}  dropdown-item">
                      Users Insert
                  </a>
              </li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Users <span>| This Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cast"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$PValue}}</h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Client Card -->
          <div class="col-xxl-4 col-xl-6">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li>
                    <a href="{{ route('Dbstaff') }}" class="{{ request()->is('Dbstaffs') ? 'active' : '' }} dropdown-item">
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
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-hearts"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$CValue}}</h6>
                    <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Client Card -->

             <!-- Project-Client Card -->
             <div class="col-xxl-4 col-xl-6">
{{-- 
              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li>
                      <a href="{{ route('DbProjectClient') }}" class="{{ request()->is('DbProjectStaffs') ? 'active' : '' }} dropdown-item">
                          All Staffs Project
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('ProjectClientInsert') }}" class="{{ request()->is('ProjectStaffsInsert') ? 'active' : '' }} dropdown-item">
                      Staffs Project Insert
                      </a>
                  </li>
                  </ul>
                </div> --}}

                <div class="card-body">
                  <h5 class="card-title">Staffs-Project <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-laptop"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$PCValue}}</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Project-Client Card -->

            
             <!-- Project-Client Card -->
             <div class="col-xxl-4 col-xl-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li>
                      <a href="{{ route('DbUser') }}" class="{{ request()->is('DbUsers') ? 'active' : '' }} dropdown-item">
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
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$UValue}}</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Project-Client Card -->

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Recent Project <span>| Weekly</span></h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      {{-- <th scope="col">#</th> --}}
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Category</th>
                      <th scope="col">Download</th>
                      <th scope="col">Date Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($recentRecords as $pt)
                    <tr>
                      
                        {{-- <th scope="row">{{ ++$i }}</th> --}}
                        <td><img src="/{{ $pt->img }}" width="60px" height="40px"
                          class="rounded" alt=""></td>
                        <td><a href="{{ $pt->live_link }}" class="text-primary fw-bold">{{ $pt->name }}</a></td>
                                <td>{{ $pt->category->name }}</td>
                                <td><a class="btn btn-dark btn-sm" href="{{ $pt->youtube_link }}" target="blank"><i class="bi bi-play-fill"></i></a>
                                  <a class="btn btn-danger btn-sm" href="{{ $pt->download_link }}" target="blank"><i class="bi bi-download"></i></a></td>
                                  <td>{{ $pt->updated_at=date("Y-m-d") }}</td>
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
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Recent Client <span>| Weekly</span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Company</th>
                      <th scope="col">Date Time</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    @foreach ($recentReservation as $cl)
                    <tr>
                      
                        {{-- <th scope="row">{{ ++$i }}</th> --}}
                        <td><img src="/{{ $cl->img }}" width="60px" height="40px"
                          class="rounded" alt=""></td>
                        <td><a href="" class="text-primary fw-bold">{{ $cl->name }}</a></td>
                                <td>{{ $cl->email }}</td>
                                <td class="fw-bold">{{ $cl->company }}</td>
                                
                                  <td>{{ $cl->updated_at=date("Y-m-d") }}</td>
                    </tr>

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
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          {{-- <div class="card-body pb-0">
            <h5 class="card-title">Technologies &amp; Updates <span>| Today</span></h5>

            <div class="news">
              @foreach ($recentTechnology as $rt)
              <div class="post-item clearfix">
                <img style="width:50px; hight:40px; " src="/{{ $rt->img }}" alt="">
                <h4><a href="#">{{$rt->name}}</a></h4>
                <p>{{$rt->desc}}</p>
              </div>
              @endforeach

            </div><!-- End sidebar recent posts-->

          </div> --}}
        </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->
@endsection