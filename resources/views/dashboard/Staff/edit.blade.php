@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Staff Edit</h1>
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
                            <form action="{{ url('/staffsupdate') }}/{{ $Staff->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $Staff->phone_number }}"
                                        name="phone_number" placeholder="jhondoe">
                                    <label for="floatingText">phone_number</label>
                                    @error('phone_number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $Staff->salary }}"
                                        name="salary" placeholder="jhondoe">
                                    <label for="floatingText">salary</label>
                                    @error('salary')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingText" value="{{ $Staff->date_of_joining }}"
                                        name="date_of_joining" placeholder="jhondoe">
                                    <label for="floatingText">date_of_joining</label>
                                    @error('date_of_joining')
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
