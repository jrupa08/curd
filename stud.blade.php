<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>join table</title>
</head>
<body>

    @foreach($todos as $data)

    <h3>{{$data->id}}|
    {{$data->name}}|
    {{$data->dob}}|
    {{$data->email}}|
    {{$data->password}}</h3>
    @endforeach


    
</body>
</html>