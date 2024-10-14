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

                                <div class="mb-3">
                                    <label for="formFileLg" class="form-label">Image</label>
                                    <input class="form-control  form-control" name="img" id="formFileLg"
                                        type="file">
                                    @error('img')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <br>
                                    @if ($st->img != null)
                                        Old Image : <img src="{{url($st->img)}}" class="img-fluid rounded" width="80px" height="50px" />
                                    @endif
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $room->room_number }}"
                                        name="room_number" placeholder="jhondoe">
                                    <label for="floatingText">Room_Number</label>
                                    @error('room_number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" value="{{ $room->room_type }}"
                                        name="room_type" placeholder="jhondoe">
                                    <label for="floatingText">Room_Type</label>
                                    @error('room_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div> --}}

                                
                                <label for="formFileLg" class="form-label">room_type</label>
                                <select name="room_type" id="" class="form-select mb-3">
                                    @if ($room->room_type == 1)
                                        {{-- @foreach ($Service as $sr) --}}
                                        <option value="1">---Single---</option>
                                    @elseif ($room->room_type == 2)
                                        <option value="2">---Double---</option>
                                        {{-- @endforeach --}}
                                    @else
                                        <option value="3">---Suite---</option>
                                    @endif
                                    <option value="1">Single</option>
                                    <option value="2">Double</option>
                                    <option value="3">Suite</option>
                                </select>

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
                                

                                
                                <label for="formFileLg" class="form-label">Status</label>
                                <select name="availability_status" id="" class="form-select mb-3">
                                    @if ($room->availability_status == 1)
                                        {{-- @foreach ($Service as $sr) --}}
                                        <option value="1">---Available---</option>
                                    @elseif ($room->availability_status == 2)
                                        <option value="2">---Occupied---</option>
                                        {{-- @endforeach --}}
                                    @else
                                        <option value="3">---Under Maintenance---</option>
                                    @endif
                                    <option value="1">Available</option>
                                    <option value="2">Occupied</option>
                                    <option value="3">Under Maintenance</option>
                                </select>
                                {{-- <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" value="{{ $room->availability_status }}"
                                        name="availability_status" placeholder="jhondoe">
                                    <label for="floatingText">Availability_Status</label>
                                    @error('availability_status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div> --}}

                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">eidt</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
