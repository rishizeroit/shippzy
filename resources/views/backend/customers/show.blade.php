
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
                <th>Name</th> <td>{{ucfirst($customer->getUsers->name)}}</td>
              </tr>
              <tr>
                <th>Email</th> <td>{{$customer->getUsers->email}}</td>
              </tr>
              <tr>
                <th>Phone</th> <td>{{$customer->phone}}</td>
              </tr>
              <tr>
                <th>Company Name</th> <td>{{$customer->company_name}}</td>
              </tr>
              <tr>
                <th>Address</th> <td>{{$customer->address}}</td>
              </tr>
              <tr>
                <th>Status</th> 
                <td>
                  @if($customer->status == 1)
                    <span><a class="btn btn-success" href="javascript:void(0)">Active</a></span>
                  @else
                    <span><a class="btn btn-danger" href="javascript:void(0)">In Active</a></span>
                  @endif
                </td>
              </tr>
              <!-- <tr>
                <th>User Since</th> <td>{{date('d-M-Y', strtotime($customer->created_at))}}</td>
              </tr> -->
                
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
  <script src="{{base_url('js/customer/customer.js')}}"></script>

