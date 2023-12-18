<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>ragistration form</title>
  </head>
  <body>
    <h1>Edit-Form</h1>
    <form method="post" action="/update/{{$todo->id}}">
        @csrf
        @method('put')
     <div class="container">
       <div class="row">
        <div class="col-sm-6">
           <div class="mb-3">
              <label for="name" class="form-label">Name</label>
            
              <input type="text" name="name"class="form-control" value="{{$todo->name}}">
              
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">dob</label>
              <input type="date" name="dob"class="form-control" value="{{$todo->dob}}"id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
              @if($errors->has('dob'))
        <p class="text-danger">{{$errors->first('dob')}}</p>
        @endif
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">address</label>
              <input type="text" name="address"class="form-control" value="{{$todo->address}}" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
              @if($errors->has('address'))
        <p class="text-danger">{{$errors->first('address')}}</p>
        @endif
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">email</label>
              <input type="email" name="email"class="form-control" value="{{$todo->email}}"id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp"  class="form-text"></div>
              @if($errors->has('email'))
        <p class="text-danger">{{$errors->first('email')}}</p>
        @endif
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">password</label>
              <input type="password" name="password"class="form-control" value="{{$todo->password}}" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
              @if($errors->has('password'))
        <p class="text-danger">{{$errors->first('password')}}</p>
        @endif
            </div>
             
          <button type="submit" class="btn btn-primary">Update</button>
</form>

<!-- <table class="table">
  <thead>
    <th>id</th>
    <th>name</th>
    <th>action</th>
</thead>

 -->







           </div>
        </div>
</div>


  </body>
</html>