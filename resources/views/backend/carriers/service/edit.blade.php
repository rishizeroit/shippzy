
<form id="servicePrice_update" action="{{route('prices.update', $services->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-md-12"> 
      <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
      </div>
    </div>
    <div class="col-md-12"> 
      <div class="alert alert-danger already" style="display:none">
      <p></p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label>Select Service</label>
        <div class="input-group">
          <select name="service_id"  class="form-control" >
              <option value="{{ $services->service->id}}">{{ $services->service->name}}</option>
          </select>
        </div>
        <!-- /.input group -->
      </div>    
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Load Type</label>
        <option>Full Truck</option>
      </div>
    </div>
    <div class="col-md-6">
          <div class="form-group">
              <label>Price $</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                </div> 
                <input class="form-control" name="full_price" value="{{ $services->full_price }}"/>
            </div>   
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <option>Less Truck</option>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                  </div> 
                <input class="form-control" name="load_price" value="{{ $services->load_price }}"/>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <option>Auto Transport</option>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                  </div> 
                  <input class="form-control" name="auto_price" value="{{ $services->auto_price }}"/>
              </div>  
          </div>
        </div>
        </div>
        <div class="col-md-12">
          <button class="btn btn-block btn-primary" type="submit">Submit</button>
        </div>
  </div>
  <!-- /.row -->
</form>
<script src="{{base_url('js/carrier/service.js')}}"></script>
