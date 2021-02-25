@extends('backend.layout.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Services</h1>
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
                  <a href="{{route('carrier.addservice')}}" id="add_service" class="btn btn-primary">Add Service</a>
                </div>
              </div>
              @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message')}}
                </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Full Truck ($)</th>
                    <th>Less Truck ($)</th>
                    <th>Auto Transport ($)</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($services as $service)
                      <tr>
                        <td>{{ucfirst($service->service[0]['name'])}}</td>
                        <td>$ {{$service->full_price}}</td>
                        <td>$ {{$service->load_price}}</td>
                        <td>$ {{$service->auto_price}}</td>
                        <td>
                          <!-- <div class="btn-group"> -->
                            <a href="{{route('carrier.editservice', $service->id)}}" class="btn btn-primary editService">Edit</a>
                            <a type="button" href="{{route('carrier.showservice', $service->id)}}" class="btn btn-success showService">View</a>
                            <a href="{{route('carrier.destroyservice',$service->id)}}" class="btn btn-danger deleteService">Delete</a>
                          <!-- </div> -->
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
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
<script src="{{base_url('js/carrier/service.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endpush


