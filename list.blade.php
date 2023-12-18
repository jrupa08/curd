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
    <div class="container pt-5">
<a href="welcome" class="btn btn-info">Back</a>
</div>
<div class="container pt-5">

  <table class="table">
   
        <div class="row">
           <div class="col-sm-6">
     
                       <thead>
                         <th>id</th>
                          <th>name</th>
                          <th>DOB</th>
                          <th>address</th>
                          <th>email</th>
                          <th>password</th>
                          <th>action</th>
                            
                        </thead>
                            <tbody>
                                @foreach($todos as $todo)
                                <tr>
                                  
                                    <td>{{$loop->index+1}}</td>

                                    <td>{{$todo->name}}</td>
                                     <td>{{$todo->dob}}</td>
                                    <td>{{$todo->address}}</td>
                                    <td>{{$todo->email}}</td>
                                    <td>{{$todo->password}}</td>

                                      <td>
                                        <a href="/edit/{{$todo->id}}" class="btn btn-primary">Edit</a>
                                        <a href="/delete/{{$todo->id}}" class="btn btn-danger">Delet</a>
                                     </td>
                                      <tr>
                                        @endforeach
                            </tbody>

                  </div>
                 </div>
             
</table>

  </body>
</html>