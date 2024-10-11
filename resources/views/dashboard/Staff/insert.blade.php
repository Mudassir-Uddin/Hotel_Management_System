@extends('layout.db_HF')
@section('mydashboard')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Staff Insert</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Admindashboard">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Layouts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Staff Form</h5>

                            <!-- Horizontal Form -->
                            <form action="{{ url('/staffsStore') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" name="name"
                                        value="{{ old('name') }}" placeholder="Name">
                                    <label for="floatingText">Name</label>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                        id="floatingText" placeholder="Email">
                                    <label for="floatingText">Email</label>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                  <input type="number" name="phone_number" class="form-control" value="{{ old('phone_number') }}"
                                      id="floatingText" placeholder="phone_number">
                                  <label for="floatingText">phone_number</label>
                                  @error('phone_number')
                                      <p class="text-danger">{{ $message }}</p>
                                  @enderror
                              </div>

                              <div class="form-floating mb-3">
                                <input type="text" name="role" class="form-control" value="{{ old('role') }}"
                                    id="floatingText" placeholder="role">
                                <label for="floatingText">role</label>
                                @error('role')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="form-floating mb-3">
                              <input type="number" name="salary" class="form-control" value="{{ old('salary') }}"
                                  id="floatingText" placeholder="salary">
                              <label for="floatingText">salary</label>
                              @error('salary')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                          </div>
                          
                          <div class="form-floating mb-3">
                            <input type="date" name="date_of_joining" class="form-control" value="{{ old('date_of_joining') }}"
                                id="floatingText" placeholder="date_of_joining">
                            <label for="floatingText">date_of_joining</label>
                            @error('date_of_joining')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Insert</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
