
<form id="service_add" action="{{route('services.store')}}" enctype="multipart/form-data" method="post">
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
    <div class="col-md-6">
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
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleInputFile">Logo</label>
        <input type="file" name="logo" id="file">
        </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
      </div>
    </div>
        <div class="col-md-12">
          <button class="btn btn-block btn-primary" type="submit">Submit</button>
        </div>
  </div>
  <!-- /.row -->
</form>
<script src="{{base_url('js/services/services.js')}}"></script>
