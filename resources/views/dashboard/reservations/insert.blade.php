@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>reservation Insert</h1>
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
                            <h5 class="card-title">reservation Form</h5>

                            <!-- Horizontal Form -->
                            <form action="{{ url('/reservationsStore') }}" method="POST" enctype="multipart/form-data">

                                @csrf


                                <div class="form-floating mb-3">
                                    <select name="guest_id" id="" class="form-select mb-3">
                                        <option value="0" selected disabled>Select Guest name</option>
                                        @foreach ($GuestId as $sr)
                                            <option value="{{ $sr->id }}">{{ $sr->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingText">Guest Name</label>
                                    @error('guest_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>


                                <div class="form-floating mb-3">
                                    <select name="room_id" id="" class="form-select mb-3">
                                        <option value="0" selected disabled>Select Room No</option>
                                        @foreach ($RoomId as $sr)
                                        {{-- @if ($reservation == $reservations->check_in_date || $reservations->check_out_date) --}}
                                        <option disabled value="{{ $sr->id }}">{{ $sr->room_number }}</option>
                                        {{-- @else --}}
                                        <option value="{{ $sr->id }}">{{ $sr->room_number }}</option>
                                        {{-- @endif --}}
                                        @endforeach
                                    </select>
                                    <label for="floatingText">Room no</label>
                                    @error('room_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="date" name="check_in_date" class="form-control"
                                        value="{{ old('check_in_date') }}" id="floatingText" placeholder="2024-06-08">
                                    <label for="floatingText">check_in_date</label>
                                    @error('check_in_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="date" name="check_out_date" class="form-control"
                                        value="{{ old('check_out_date') }}" id="floatingText" placeholder="2024-06-10">
                                    <label for="floatingText">check_out_date</label>
                                    @error('check_out_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" name="total_amount" class="form-control"
                                        value="{{ old('total_amount') }}" id="floatingText" placeholder="total_amount">
                                    <label for="floatingText">total_amount</label>
                                    @error('total_amount')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <label for="formFileLg" class="form-label">Status</label>
                                <select name="status" id="" class="form-select mb-3">
                                    <option value="0" selected disabled>Select Status</option>
                                    <option value="1">Booked</option>
                                    <option value="2">Checked-In</option>
                                    <option value="3">Cancelled</option>
                                </select>
                                @error('status')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            

                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Insert</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
