<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
        <button><a href="{{route('admin')}}" class="btn btn-success ">back</a></button>
            <div class="col-3">

            </div>
           
            <div class="col-4">
            

           <table class="table table-danger">
            <tr>
                <th>id</th>
                <th>Carname</th>
                <th>models</th>
                <th>rate</th>
                <th>location</th>
                <th>photo</th>
                <th colspan="2" style="text-align: center;">Action</th>
            </tr>
            @foreach($data as $datas)
            <tr>
                <td>{{$datas->car_id}}</td>
                <td>{{$datas->Carname}}</td>
                <td>{{$datas->models}}</td>
                <td>{{$datas->rate}}</td>
                <td>{{$datas->location}}</td>
                <td><img src="{{asset('storage/images/' .$datas->photo)}}"alt="images" width="100px" height="100px" ></td>
                <td><a href="{{route('edit',$datas->car_id)}}" class="btn btn-success">edit</a></td>
                <td><a href="{{route('delete',$datas->car_id)}}" class="btn btn-danger">delete</a></td>
            </tr>
            @endforeach
           </table>




            </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>