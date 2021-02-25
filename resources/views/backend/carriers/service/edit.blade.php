
<form id="service_update" action="{{route('carrier.update', $id)}}" enctype="multipart/form-data" method="post">
  @csrf
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
      </div>
    </div>
    @foreach($services as $service)
        <div class="col-md-12">
          <div class="form-group">
          <label>Service</label>
              <input type="text"  value="{{ucfirst($service->service[0]['name'])}}" class="form-control" disabled>
              <input type="hidden" class="form-control" name="service_id" value="{{$service->service_id}}"/>
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
                <input class="form-control" name="full_price" value="{{$service->full_price}}"/>
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
                <input class="form-control" name="load_price" value="{{$service->load_price}}"/>
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
                  <input class="form-control" name="auto_price" value="{{$service->auto_price}}"/>
              </div>  
          </div>
        </div>
        </div>
        <input type="hidden" name="user_id" value="{{$service->user_id}}">
        @endforeach
        <div class="col-md-12">
          <button class="btn btn-block btn-primary" type="submit">Submit</button>
        </div>
  </div>
  <!-- /.row -->
</form>
<script src="{{base_url('js/carrier/service.js')}}"></script>
