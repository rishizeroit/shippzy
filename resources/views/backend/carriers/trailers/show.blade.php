
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <!-- <h3 class="card-title">DataTable with default features</h3> -->
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <tbody>
              <tr>
                <th>Type</th> <td>{{strtoupper($trailer->name)}}</td>
              </tr>
              <tr>
                <th>Name</th> <td>{{ucfirst($trailer->name)}}</td>
              </tr>
              <tr>
                <th>Trailer Number</th> <td>{{$trailer->trailer_no}}</td>
              </tr>
              <tr>
                <th>Frieght Weight</th> <td>{{$trailer->frieght_weight}}</td>
              </tr>
              <tr><th>Status</th>  
              <td>
                @if($trailer->status == 1)
                <span><a class="btn btn-success" href="javascript:void(0)">Active</a></span>
                @else
                <span><a class="btn btn-danger" href="javascript:void(0)">In Active</a></span>
                @endif
            </td></tr>
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
  <script src="{{base_url('js/carrier/trailer.js')}}"></script>

