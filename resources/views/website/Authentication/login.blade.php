@extends('layout.form')
@section('myform')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- ... other head elements ... -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

    <div class="container-fluid position-relative d-flex p-0">

        <!-- Login Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-around mb-3">
                            <a href="index.html" class="">
                                <h3  style="color:#3c76cc;"><i class="fa fa-user-edit me-2"></i>KETO</h3>
                            </a>
                            <h3>Login User</h3>
                        </div>
                        <form  enctype="multipart/form-data"
                            id="formSubmit">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" name="email" id="floatingText" value="{{ old('email') }}"
                                    class="form-control" placeholder="Email">
                                <label for="floatingText">Email</label>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="pass" id="floatingText" value="{{ old('pass') }}"
                                    class="form-control">
                                <label for="floatingText">Password</label>
                                @error('pass')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button style="background-color:#3c76cc; border-color:#3c76cc;" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                            <a href="/"  style="color:#3c76cc;">Back To Home :)</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
    </div>




    <script>
        // Assuming you are using jQuery for simplicity
        $(document).ready(function() {
            $('#formSubmit').on('submit', function(e) {

                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '/loginstore',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        
                        Swal.fire({
                            icon: 'success',
                            title: 'Good',
                            text: `Why do I have this issue? ${ response.message}`,
                        })
                        
                        window.location.href = response.redirect;
                        
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: `Why do I have this issue? ${ xhr.responseJSON.message}`,
                        })
                    },
                });
            });
        });
    </script>

@endsection
