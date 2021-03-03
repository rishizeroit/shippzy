
<form id="trailer_add" action="{{route('trailers.store')}}" method="post">
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
            <label>Type:</label>
            <div class="input-group">
                <select name="type"  class="form-control" >
                    <option value="">Select Service</option> 
                    <option value="boxTruck">Box Truck</option>
                    <option value="dryVan">Dry Van</option>
                    <option value="Reefers">Reefers</option>
                    <option value="flatBed">Flat Bed</option>
                    <option value="setpDeck">Setp Deck</option>
                    <option value="lowBoy">Low Boy</option>
                    <option value="rgn">RGN</option>
                    <option value="conestoga">Conestoga</option>
                    <option value="sprinterVan">Sprinter Van</option>       
                </select>
            </div>
            <!-- /.input group -->
          </div>    
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Name:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-mail-outline"></i></span>
              </div>
              <input type="text" name="name" value="{{ old('name') }}" class="form-control" data-mask>
            </div>
            <!-- /.input group -->
          </div>
        </div>
        <div class="col-md-6">
          <!-- phone mask -->
          <div class="form-group">
            <label>Trailer No:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" value="{{ old('trailer_no') }}" name="trailer_no" data-mask>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-6">
          <!-- phone mask -->
          <div class="form-group">
            <label>Frieght Weight:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" value="{{ old('frieght_weight') }}" name="frieght_weight" data-mask>
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
<script src="{{base_url('js/carrier/trailer.js')}}"></script>
