
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
                <th>Name</th> <td>{{ucfirst($carrier->getCarUsers->name)}}</td>
              </tr>
              <tr>
                <th>Email</th> <td>{{$carrier->getCarUsers->email}}</td>
              </tr>
              <tr>
                <th>Phone</th> <td>{{$carrier->phone}}</td>
              </tr>  
              <tr>
                <th>Company Name</th> <td>{{$carrier->company_name}}</td>
              </tr>
              <tr>
                <th>Address</th> <td>{{$carrier->address}}</td>
              </tr>     
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
  <script src="{{base_url('js/carrier/carrier.js')}}"></script>

