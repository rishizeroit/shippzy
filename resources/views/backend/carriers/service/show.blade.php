
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <!-- <h3 class="card-title">DataTable with default features</h3> -->
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            @foreach($services as $service)
              <tbody>
              <tr><th>Name</th> <td>{{ucfirst($service->service[0]['name'])}}</td></tr>
              <tr><th>Full Truck($)</th> <td>$ {{$service->full_price}}</td></tr>
              <tr><th>Less Truck($)</th> <td>$ {{$service->load_price}}</td></tr>       
              <tr><th>Auto Transport($)</th> <td>$ {{$service->auto_price}}</td></tr>            
              </tbody>
              @endforeach
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
  <script src="{{base_url('js/services/services.js')}}"></script>

