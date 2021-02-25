
<form id="carrier_update" action="{{route('carriers.update', $carrier->id)}}" method="post">
      @csrf
      @method('PUT')
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
          <input type="text" name="name" value="{{ ucfirst($carrier->getCarUsers->name) }}" class="form-control" data-mask>
        </div>
        <!-- /.input group -->
      </div>
    </div>    
    <div class="col-md-4">
      <div class="form-group">
        <label>Company Name:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
          </div>
          <input type="text" class="form-control" value="{{ $carrier->company_name }}" name="company_name" data-mask>
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
          <input type="text" class="form-control" value="{{ $carrier->phone}}" name="phone" data-mask>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->
    </div>
    <div class="col-md-12">
      
      <div class="form-group">
        <label>Address</label>
        <textarea class="form-control" name="address" rows="3" placeholder="Enter ...">{{ $carrier->address }}</textarea>
      </div>
      <div class="form-group">
        <label>
          <input type="radio" name="status" value="1" class="flat-red" @if($carrier->status == 1)checked @endif>
          Active
        </label><br>
        <label>
          <input type="radio" name="status" value="0" class="flat-red" @if($carrier->status == 0)checked @endif>
          In Active
        </label>
      </div>
    </div>
    <div class="col-md-12">
        <button class="btn btn-block btn-primary" type="submit">Submit</button>
    </div>

  </div>
</form>
<script src="{{base_url('js/carrier/carrier.js')}}"></script>