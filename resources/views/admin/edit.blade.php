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
    @if(session()->has('success'));
            <div style="text-align:center ;margin-top:20px;" class="alert alert-success">
                <strong>{{session()->get('success')}}</strong>
            </div >
    @endif
        <div class="row">
        <button><a href="{{route('admin')}}" class="btn btn-success ">back</a></button>
            <div class="col-3">

            </div>
           
            <div class="col-4">
            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3>edit car</h3>
                <form method="POST" action="{{route('update',$data->id)}}" enctype="multipart/form-data">
                  @csrf
                  <label>Carname</label>
                  <input type="text" name="Carname" class="form-control"  value="{{$data->Carname}}">
                  <label>models</label>
                  <input type="text" name="models" class="form-control" value="{{$data->models}}">
                  <label>rate</label>
                  <input type="text" name="rate" class="form-control" value="{{$data->rate}}">
                  <label >location</label>
                  <input type="text" name="location" class="form-control" value="{{$data->location}}">
                  <label>photo</label>
                  <input type="file" name="photo" class="form-control">
                  <button type="submit" value="update" class="btn btn-success">update</button>
                </form>
            

  </div>
            </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>