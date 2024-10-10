@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Payment Edit</h1>
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
                            <h5 class="card-title">Payment Form</h5>
                            <form action="{{ url('/paymentsupdate') }}/{{ $st->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-floating mb-3">
                                    <select name="reservation_id" id="" class="form-select mb-3">
                                        @foreach ($ReservationId as $ct)
                                            {{-- <option value="0">Select SubServices</option> --}}
                                            @if ($ct->id == $st->ReservationId)
                                                <option value="{{$ct->id}}" selected>{{$ct->id}}</option>
                                            @else
                                                <option value="{{$ct->id}}">{{$ct->id}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <label for="formFileLg" class="form-label">Payment Method</label>
                                <select name="payment_method" id="" class="form-select mb-3">
                                    @if ($st->payment_method == 1)
                                        {{-- @foreach ($Service as $sr) --}}
                                        <option value="1">---Credit Card---</option>
                                    @elseif ($st->payment_method == 2)
                                        <option value="2">---Debit Card---</option>
                                        {{-- @endforeach --}}
                                    @elseif ($st->payment_method == 3)
                                        <option value="3">---Cash---</option>
                                    @else
                                        <option value="4">---Online Transfer---</option>
                                    @endif
                                    <option value="1">Credit Card</option>
                                    <option value="2">Debit Card</option>
                                    <option value="3">Cash</option>
                                    <option value="4">Online Transfer</option>
                                </select>
                            
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $st->amount_paid }}"
                                        name="amount_paid" placeholder="jhondoe">
                                    <label for="floatingText">Amount Paid</label>
                                    @error('amount_paid')
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
