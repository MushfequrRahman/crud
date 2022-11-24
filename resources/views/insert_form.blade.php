<!-- Use Scripts -->
<script src=" {{ asset('js/app.js') }}" defer></script>

<!-- Use Styles -->
<link href=" {{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
      @if(session('success'))
      <div class="text-success text-center">{{session('success')}}</div>
      @endif
      @if ($errors->any())
      <div class="alert alert-danger">
            <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
            </ul>
            @if ($errors->has('email'))
            @endif
      </div>
      @endif
      <form action="/user_create" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  @if ($errors->has('name'))
                  <span class="invalid feedback" role="alert">
                        <strong>{{ $errors->first('name') }}.</strong>
                  </span>
                  @endif
            </div>
            <div class="mb-3">
                  <label>Email:</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter Email"><br>
            </div>
            <div class="mb-3">
                  <label>Mobile:</label>
                  <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile"><br>
            </div>
            <div class="mb-3">
                  <label>Status:</label>
                  <input type="text" class="form-control" name="status" placeholder="Enter Status"><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>