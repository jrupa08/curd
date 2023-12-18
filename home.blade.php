<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD OPRETION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container pt-5">
      <h2>catagory<a class="btn btn-info" href="/catagory-create">New-catagory</h2></a>
    <div class="col-sm-6">
<table class="table">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $catagory)
    <tr>
      <td> {{$loop->index+1}}</td>
      <td>{{$catagory->title}}</td>
    
      <td>
      
    
      <a href="/catagiry-edit/{{$catagory->id}}" class="btn btn-info">Edit</a>
     
       <a href="/catagory-delete/{{$catagory->id}}" class="btn btn-danger">delete</a> 

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</form>
    </div>
    </div>
</body>
</html>