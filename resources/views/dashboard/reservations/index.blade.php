@extends('layout.db_HF')
@section('mydashboard')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>reservations Tables</h1>
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
                            <h5 class="card-title">reservation Table</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>guest_name</th>
                                        <th>room_no</th>
                                        <th>check_in_date</th>
                                        <th>check_out_date</th>
                                        <th>total_amount</th>
                                        <th>status</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($reservations as $ct)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $ct->guests->name }}</td>
                                            <td>{{ $ct->rooms->room_number }}</td>
                                            <td>{{ $ct->check_in_date }}</td>
                                            <td>{{ $ct->check_out_date }}</td>
                                            <td>{{ $ct->total_amount }}</td>
                                            <td>
                                                @if ($ct->status == 1)
                                                    <option value="1">Booked</option>
                                                @elseif ($ct->status == 2)
                                                    <option value="2">Checked-In</option>
                                                    {{-- @endforeach --}}
                                                @else
                                                    <option value="3">Cancelled</option>
                                                @endif
                                            </td>
                                            <td>{{ $ct->updated_at = date('Y-m-d') }}</td>
                                            <td>
                                                <button class="btn btn-warning "><a class="text-white"
                                                        href="{{ url('/reservationsedit') }}/{{ $ct->id }}">Edit</a></button>
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
                    window.location.href = "{{ url('/reservationsdelete') }}/" + id
                }
            })
            // if (ans) {
            //     var ans = confirm("Do you want to delete ?")

            // }
        }
    </script>
@endsection
