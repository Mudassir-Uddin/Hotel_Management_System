@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>reservation Edit</h1>
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
                            <form action="{{ url('/reservationsupdate') }}/{{ $st->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-floating mb-3">
                                    <select name="guest_id" id="" class="form-select mb-3">
                                        @foreach ($GuestId as $ct)
                                            {{-- <option value="0">Select SubServices</option> --}}
                                            @if ($ct->id == $st->guest_id)
                                                <option value="{{$ct->id}}" selected>{{$ct->name}}</option>
                                            @else
                                                <option value="{{$ct->id}}">{{$ct->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-floating mb-3">
                                    <select name="room_id" id="" class="form-select mb-3">
                                        @foreach ($RoomId as $ct)
                                            {{-- <option value="0">Select SubServices</option> --}}
                                            @if ($ct->id == $st->room_id)
                                                <option value="{{$ct->id}}" selected>{{$ct->room_number}}</option>
                                            @else
                                                <option value="{{$ct->id}}">{{$ct->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingText" value="{{ $st->check_in_date }}"
                                        name="check_in_date" placeholder="2024=06-08">
                                    <label for="floatingText">check_in_date</label>
                                    @error('check_in_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingText" value="{{ $st->check_out_date }}"
                                        name="check_out_date" placeholder="2024-06-10">
                                    <label for="floatingText">check_out_date</label>
                                    @error('check_out_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $st->total_amount }}"
                                        name="total_amount" placeholder="jhondoe">
                                    <label for="floatingText">total_amount</label>
                                    @error('total_amount')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <label for="formFileLg" class="form-label">Status</label>
                                <select name="status" id="" class="form-select mb-3">
                                    @if ($st->status == 1)
                                        {{-- @foreach ($Service as $sr) --}}
                                        <option value="1">---Booked---</option>
                                    @elseif ($st->status == 2)
                                        <option value="2">---Checked-In---</option>
                                        {{-- @endforeach --}}
                                    @else
                                        <option value="3">---Cancelled---</option>
                                    @endif
                                    <option value="1">Booked</option>
                                    <option value="2">Checked-In</option>
                                    <option value="3">Cancelled</option>
                                </select>
                            
                            

                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">eidt</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
