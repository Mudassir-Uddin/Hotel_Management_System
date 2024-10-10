@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Payment Insert</h1>
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

                            <!-- Horizontal Form -->
                            <form action="{{ url('/paymentsStore') }}" method="POST" enctype="multipart/form-data">

                                @csrf


                                <div class="form-floating mb-3">
                                    <select name="reservation_id" id="" class="form-select mb-3">
                                        <option value="0" selected disabled>Select Reservation Id</option>
                                        @foreach ($ReservationId as $sr)
                                            <option value="{{ $sr->id }}">{{ $sr->id }}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingText">Reservation Id</label>
                                    @error('reservation_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>

                                <label for="formFileLg" class="form-label">payment_method</label>
                                <select name="payment_method" id="" class="form-select mb-3">
                                    <option value="0" selected disabled>Select payment_method</option>
                                    <option value="1">Credit Card</option>
                                    <option value="2">Debit Card</option>
                                    <option value="3">Cash</option>
                                    <option value="4">Online Transfer</option>
                                </select>
                                @error('payment_method')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            
                            
                            {{-- <div class="form-floating mb-3">
                                <select name="amount_paid" id="" class="form-select mb-3">
                                    <option value="0" selected disabled>Select Amount Paid</option>
                                    @foreach ($ReservationId as $sr)
                                        <option value="{{ $sr->id }}">{{ $sr->total_amount }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingText">Amount Paid</label>
                                @error('amount_paid')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div> --}}

                            <div class="form-floating mb-3">
                                <input type="number" name="amount_paid" class="form-control"
                                    value="{{ old('amount_paid') }}" id="floatingText" placeholder="amount_paid">
                                <label for="floatingText">Amount Paid</label>
                                @error('amount_paid')
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
