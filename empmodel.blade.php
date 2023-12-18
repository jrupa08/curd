<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
        <h3>Laravel crud</h3>
</div>
<div class="container mt-5">
@if($message= Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif
</div>
   
<!-- Button trigger modal -->
<div class="container">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Open Form
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/empmodale" method="post">
        @csrf
      <div class="modal-body">
      
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="fname">
    @if($errors->has('fname'))
        <p class="text-danger">{{$errors->first('fname')}}</p>
        @endif
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">lname</label>
    <input type="text" class="form-control"name="lname">
    @if($errors->has('lname'))
        <p class="text-danger">{{$errors->first('lname')}}</p>
        @endif
  </div>
  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">address</label>
  <input type="textaera" class="form-control"  name="address" aria-describedby="emailHelp">
  @if($errors->has('address'))
        <p class="text-danger">{{$errors->first('address')}}</p>
        @endif
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile</label>
    <input type="number" class="form-control"name="mobile">
    @if($errors->has('mobile'))
        <p class="text-danger">{{$errors->first('mobile')}}</p>
        @endif
  </div>
  <div class="modal-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
</div>
      </div>
    </div>
</form>
  </div>
</div>
    
</body>
</html>