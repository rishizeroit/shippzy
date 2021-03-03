@extends('backend.layout.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Trailers</h1>
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
                  <a href="{{route('trailers.create')}}" id="add_trailer" class="btn btn-primary">Add Trailer</a>
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
                    <th>Type</th>
                    <th>Name</th>
                    <th>Trailer No</th>
                    <th>Frieght Weight</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($trailers as $trailer)
                      <tr>
                        <td>{{strtoupper($trailer->type)}}</td>
                        <td>{{ucfirst($trailer->name)}}</td>
                        <td>{{$trailer->trailer_no}}</td>
                        <td>{{$trailer->frieght_weight}} lbs</td>
                        <td>
                          @if($trailer->status == 1)
                            <span><a class="btn btn-success" href="javascript:void(0)">Active</a></span>
                          @else
                            <span><a class="btn btn-danger" href="javascript:void(0)">In Active</a></span>
                          @endif
                        </td>
                        <td>
                        <div class="btn-group">
                            <a href="{{route('trailers.edit', $trailer->id)}}" class="btn btn-primary editTrailer">Edit</a>
                            <a type="button" href="{{route('trailers.show', $trailer->id)}}" class="btn btn-success showTrailer">View</a>
                            <form method="post" action="{{route('trailers.destroy', $trailer->id)}}">
                                @csrf                                
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div> 
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
<script src="{{base_url('js/carrier/trailer.js')}}"></script>
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


