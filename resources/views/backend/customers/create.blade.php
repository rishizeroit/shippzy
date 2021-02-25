
<form id="customer_add" action="{{route('customers.store')}}" method="post">
  @csrf
  @method('POST')
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
          </div>
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Name:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-user"></i></span>
              </div>
              <input type="text" name="name" value="{{ old('name') }}" class="form-control" data-mask>
            </div>
            <!-- /.input group -->
          </div>    
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Email:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-mail-outline"></i></span>
              </div>
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" data-mask>
            </div>
            <!-- /.input group -->
          </div>
        </div>
        <div class="col-md-4">
          <!-- phone mask -->
          <div class="form-group">
            <label>Phone:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" value="{{ old('phone') }}" name="phone" data-mask>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-12">
          <!-- phone mask -->
          <div class="form-group">
            <label>Company Name:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" value="{{ old('company_name') }}" name="company_name" data-mask>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="address" rows="3" placeholder="Enter ...">{{ old('address') }}</textarea>
          </div>
        </div>
        <div class="col-md-6">
          <!-- phone mask -->
          <div class="form-group">
            <label>Password:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-password"></i></span>
              </div>
              <input type="password" name="password" class="form-control" data-mask>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-6">
          <!-- phone mask -->
          <div class="form-group">
            <label>Confirm Password:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-password"></i></span>
              </div>
              <input type="password" name="password_confirmation" class="form-control" data-mask>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-12">
          <button class="btn btn-block btn-primary" type="submit">Submit</button>
        </div>
    </div>
  <!-- /.row -->
</form>
<script src="{{base_url('js/customer/customer.js')}}"></script>
