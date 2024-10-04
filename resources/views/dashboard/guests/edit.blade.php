@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>guest Edit</h1>
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
                            <form action="{{ url('/guestsupdate') }}/{{ $guest->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" value="{{ $guest->name }}"
                                        name="name" placeholder="jhondoe">
                                    <label for="floatingText">guestname</label>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingText" value="{{ $guest->email }}"
                                        name="email" placeholder="jhondoe">
                                    <label for="floatingText">email</label>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $guest->phone }}"
                                        name="phone" placeholder="jhondoe">
                                    <label for="floatingText">phone</label>
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" value="{{ $guest->address }}"
                                        name="address" placeholder="jhondoe">
                                    <label for="floatingText">address</label>
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingText" value="{{ $guest->age }}"
                                        name="age" placeholder="jhondoe">
                                    <label for="floatingText">age</label>
                                    @error('age')
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
