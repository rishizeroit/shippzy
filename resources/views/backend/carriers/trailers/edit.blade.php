
<form id="trailer_update" action="{{route('trailers.update', $trailer->id)}}" method="post">
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
        <div class="col-md-6">
          <div class="form-group">
            <label>Type:</label>
            <div class="input-group">
                <select name="type"  class="form-control" >
                    <option value="">Select Service</option> 
                    <option value="boxTruck" @if($trailer->type == 'boxTruck') selected @endif>Box Truck</option>
                    <option value="dryVan" @if($trailer->type == 'dryVan') selected @endif>Dry Van</option>
                    <option value="Reefers" @if($trailer->type == 'Reefers') selected @endif>Reefers</option>
                    <option value="flatBed" @if($trailer->type == 'flatBed') selected @endif>Flat Bed</option>
                    <option value="setpDeck" @if($trailer->type == 'setpDeck') selected @endif>Setp Deck</option>
                    <option value="lowBoy" @if($trailer->type == 'lowBoy') selected @endif>Low Boy</option>
                    <option value="rgn" @if($trailer->type == 'rgn') selected @endif>RGN</option>
                    <option value="conestoga" @if($trailer->type == 'conestoga') selected @endif>Conestoga</option>
                    <option value="sprinterVan" @if($trailer->type == 'sprinterVan') selected @endif>Sprinter Van</option>       
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
              <input type="text" name="name" value="{{ $trailer->name }}" class="form-control" data-mask>
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
              <input type="text" class="form-control" value="{{ $trailer->trailer_no }}" name="trailer_no" data-mask>
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
              <input type="text" class="form-control" value="{{ $trailer->frieght_weight }}" name="frieght_weight" data-mask>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>
                <input type="radio" name="status" value="1" class="flat-red" @if($trailer->status == 1)checked @endif>
                Active
                </label><br>
                <label>
                <input type="radio" name="status" value="0" class="flat-red" @if($trailer->status == 0)checked @endif>
                In Active
                </label>
            </div>
        </div>
      
        <div class="col-md-12">
          <button class="btn btn-block btn-primary" type="submit">Submit</button>
        </div>
    </div>
  <!-- /.row -->
</form>
<script src="{{base_url('js/carrier/trailer.js')}}"></script>
