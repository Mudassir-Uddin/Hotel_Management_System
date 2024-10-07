@extends('layout.db_HF')
@section('mydashboard')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Room Insert</h1>
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
                            <h5 class="card-title">Room Form</h5>

                            <!-- Horizontal Form -->
                            <form action="{{ url('/roomsStore') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" name="room_number"
                                        value="{{ old('room_number') }}" placeholder="room_number">
                                    <label for="floatingText">Room_Number</label>
                                    @error('room_number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
{{-- 
                                <div class="form-floating mb-3">
                                    <input type="text" name="room_type" class="form-control" value="{{ old('room_type') }}"
                                        id="floatingText" placeholder="room_type">
                                    <label for="floatingText">Room_Type</label>
                                    @error('room_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div> --}}
                                
                                <label for="formFileLg" class="form-label">Room_Type</label>
                                <select name="room_type" id="" class="form-select mb-3">
                                    <option value="0" selected disabled>Select Room Type</option>
                                    <option value="1">Single</option>
                                    <option value="2">Double</option>
                                    <option value="3">Suite</option>
                                </select>
                                @error('room_type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                

                                <div class="form-floating mb-3">
                                  <input type="number" name="bed_count" class="form-control" value="{{ old('bed_count') }}"
                                      id="floatingText" placeholder="bed_count">
                                  <label for="floatingText">Bed_Count</label>
                                  @error('bed_count')
                                      <p class="text-danger">{{ $message }}</p>
                                  @enderror
                              </div>

                              <div class="form-floating mb-3">
                                <input type="number" name="price_per_night" class="form-control" value="{{ old('price_per_night') }}"
                                    id="floatingText" placeholder="price_per_night">
                                <label for="floatingText">Price_Per_Night</label>
                                @error('price_per_night')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <label for="formFileLg" class="form-label">Status</label>
                            <select name="availability_status" id="" class="form-select mb-3">
                                <option value="0" selected disabled>Select Status</option>
                                <option value="1">Available</option>
                                <option value="2">Occupied</option>
                                <option value="3">Under Maintenance</option>
                            </select>
                            @error('availability_status')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                            {{-- <div class="form-floating mb-3">
                              <input type="text" name="availability_status" class="form-control" value="{{ old('availability_status') }}"
                                  id="floatingText" placeholder="availability_status">
                              <label for="floatingText">Availability_Status</label>
                              @error('availability_status')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                          </div> --}}

                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Insert</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
