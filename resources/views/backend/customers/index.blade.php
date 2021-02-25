@extends('backend.layout.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="btn">
                  <a href="{{route('customers.create')}}" id="add_customer" class="btn btn-primary">Add Customer</a>
                </div>
              </div>
              @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message')}}
                </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="customer" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Added On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($customers as $customer)
                      <tr>
                        <td>{{ucfirst($customer->getUsers->name)}}</td>
                        <td>{{$customer->getUsers->email}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>
                          @if($customer->status == 1)
                            <span><a class="btn btn-success" href="javascript:void(0)">Active</a></span>
                          @else
                            <span><a class="btn btn-danger" href="javascript:void(0)">In Active</a></span>
                          @endif
                        </td>
                        <td>{{date('d-M-Y', strtotime($customer->created_at))}}</td>
                        <td>
                         <div class="group">
                            <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-primary editCustomer">Edit</a>
                            <a type="button" href="{{route('customers.show', $customer->id)}}" class="btn btn-success showCustomer">View</a>
                            <form method="post" action="{{route('customers.destroy', $customer->id)}}">
                            @csrf                                
                            @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                           </div> 
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>User Since</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{base_url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
@endpush

@push('scripts')
<script src="{{base_url('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{base_url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{base_url('js/customer/customer.js')}}"></script>
<script>
  $(function () {
    $("#customer").DataTable({
      "responsive": true, "lengthChange": false, 
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "autoWidth": false,
    "columnDefs": [
      { "width": "60px", "targets": 3 },
       { "width": "100px", "targets": 4 },
    ],
    });
  });
</script>
@endpush


