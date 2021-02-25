@extends('backend.layout.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Additional Services</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Additional Services</li>
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
                  <a href="{{route('services.create')}}" id="add_service" class="btn btn-primary">Add Services</a>
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
                    <th>Logo</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($services as $service)
                      <tr>
                        <td>{{ucfirst($service->name)}}</td>
                        <td><img src="{{base_url('images/' . $service->logo) }}" alt="" width="70px" height="70px"/></td>
                        <td>
                            @if($service->status == 1)
                              <span><a class="btn btn-success" href="javascript:void(0)">Active</a></span>
                            @else
                              <span><a class="btn btn-danger" href="javascript:void(0)">In Active</a></span>
                            @endif
                        </td>
                        <td>
                          <div class="btn-group">
                            <a href="{{route('services.edit', $service->id)}}" class="btn btn-primary editService">Edit</a>
                            <a type="button" href="{{route('services.show', $service->id)}}" class="btn btn-success showService">View</a>
                            <form method="post" action="{{route('services.destroy', $service->id)}}">
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
                    <th>Logo</th>
                    <th>Status</th>
                    <th>Action</th>
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
<script src="{{base_url('js/services/services.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endpush


