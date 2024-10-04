@extends('layout.db_HF')
@section('mydashboard')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>guest Insert</h1>
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
                            <h5 class="card-title">guest Form</h5>

                            <!-- Horizontal Form -->
                            <form action="{{ url('/guestsStore') }}" method="POST" enctype="multipart/form-data">

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
                                  <input type="number" name="phone" class="form-control" value="{{ old('phone') }}"
                                      id="floatingText" placeholder="phone">
                                  <label for="floatingText">Phone</label>
                                  @error('phone')
                                      <p class="text-danger">{{ $message }}</p>
                                  @enderror
                              </div>

                              <div class="form-floating mb-3">
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                                    id="floatingText" placeholder="address">
                                <label for="floatingText">address</label>
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="form-floating mb-3">
                              <input type="number" name="age" class="form-control" value="{{ old('age') }}"
                                  id="floatingText" placeholder="age">
                              <label for="floatingText">Age</label>
                              @error('age')
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
