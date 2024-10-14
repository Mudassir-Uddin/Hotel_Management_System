@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Rooms Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Admindashboard">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Room Table</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Room_No</th>
                                        <th>Room_Type</th>
                                        <th>Bed_Count</th>
                                        <th>Price_Per_Night</th>
                                        <th>Status</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($rooms as $ct)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                    <td><img src="/{{ $ct->img }}" width="80px" height="50px"
                                        class="rounded" alt=""></td>
                                            <td>{{ $ct->room_number }}</td>
                                            {{-- <td>{{ $ct->room_type }}</td> --}}

                                            <td>
                                                @if ($ct->room_type == 1)
                                                    <option value="1">Single</option>
                                                @elseif ($ct->room_type == 2)
                                                    <option value="2">Double</option>
                                                    {{-- @endforeach --}}
                                                @else
                                                    <option value="3">Suite</option>
                                                @endif
                                            </td>

                                            <td>{{ $ct->bed_count }}</td>
                                            <td>{{ $ct->price_per_night }}</td>
                                            {{-- <td>{{ $ct->availability_status }}</td> --}}
                                            <td>
                                                @if ($ct->availability_status == 1)
                                                    <option value="1">Available</option>
                                                @elseif ($ct->availability_status == 2)
                                                    <option value="2">Occupied</option>
                                                    {{-- @endforeach --}}
                                                @else
                                                    <option value="3">Under Maintenance</option>
                                                @endif
                                            </td>
                                            <td>{{ $ct->updated_at = date('Y-m-d') }}</td>
                                                <td>
                                                    <button class="btn btn-warning "><a class="text-white"
                                                            href="{{ url('/roomsedit') }}/{{ $ct->id * 548548 }}">Edit</a></button>
                                                    <button onclick="myfun({{ $ct->id }})"
                                                        class="btn btn-danger">Delete</button>
                                                </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->


    <script>
        function myfun(id) {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'

                    )
                    window.location.href = "{{ url('/roomsdelete') }}/" + id
                }
            })
            // if (ans) {
            //     var ans = confirm("Do you want to delete ?")

            // }
        }
    </script>
@endsection
