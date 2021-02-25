<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('js/front/cities.js')}}"></script>

</head>
<body>

<form action="{{route('book.freeQuote')}}" method="post">
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
        <div class="card-body">
        
          <!-- <div>
            <select id="sel_user">
                <option value="0">- Select -</option>
            </select>
          </div> -->
          <div class="form-group">
            <label>shipping to:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-mail-outline"></i></span>
              </div>
              <input type="text" name="ship_from" value="{{ $input['ship_from']}}" class="form-control" data-mask>
            </div>
            <!-- /.input group -->
          </div>
          <h3>Type Of Location</h3>
          <div class="form-check">
            <input type="radio" name="location" value="bussiness" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Bussiness</label>
          </div>
          <div class="form-check">
            <input type="radio" name="location" value="residential" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Residential</label>
          </div>
          <div class="form-check">
            <input type="radio" name="location" value="drop_of_at_car_ter" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Drop off at a carrier terminal</label>
          </div>
          <button class="btn btn-block btn-primary" type="submit">Submit</button>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </div>

  </div>
  <!-- /.row -->
</form>

</body>
</html>




