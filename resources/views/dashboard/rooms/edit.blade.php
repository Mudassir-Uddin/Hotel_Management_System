@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Room Edit</h1>
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
                            <form action="{{ url('/roomsupdate') }}/{{ $room->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $room->room_number }}"
                                        name="room_number" placeholder="jhondoe">
                                    <label for="floatingText">Room_Number</label>
                                    @error('room_number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" value="{{ $room->room_type }}"
                                        name="room_type" placeholder="jhondoe">
                                    <label for="floatingText">Room_Type</label>
                                    @error('room_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $room->bed_count }}"
                                        name="bed_count" placeholder="jhondoe">
                                    <label for="floatingText">Bed_Count</label>
                                    @error('bed_count')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $room->price_per_night }}"
                                        name="price_per_night" placeholder="jhondoe">
                                    <label for="floatingText">Price_Per_Night</label>
                                    @error('price_per_night')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" value="{{ $room->availability_status }}"
                                        name="availability_status" placeholder="jhondoe">
                                    <label for="floatingText">Availability_Status</label>
                                    @error('availability_status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">eidt</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
