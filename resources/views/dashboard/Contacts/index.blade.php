@extends('layout.db_HF')
@section('mydashboard')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Contacts Tables</h1>
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
              <h5 class="card-title">Contact Table</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($Contact as $ct)
                  <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{ $ct->name }}</td>
                    <td>{{ $ct->email }}</td>
                    <td>{{ $ct->phone }}</td>
                   
                            <td style="width:30%;"><p style="height:50px; overflow:auto;">{{ $ct->message }}</p></td>
                   
                            <td>{{ $ct->updated_at=date("Y-m-d") }}</td>
                            <td>
                        <a href="{{ url('/Contactsedit') }}/{{ $ct->id }}"
                            class="btn btn-warning">Edit</a>
                        <button onclick="myfun({{ $ct->id }})" class="btn btn-danger">Delete</button>
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
              window.location.href="{{ url('/Contactsdelete') }}/"+id
          }
      })
      // if (ans) {
      //     var ans = confirm("Do you want to delete ?")

      // }
  }
</script>
@endsection