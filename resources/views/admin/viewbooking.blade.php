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
            <div class="card" style="width: 52rem;">
  <div class="card-body">
    <h3>view booking</h3>
    <table class="table table-danger">
        <tr>
   
            <th>name</th>
            <th>mobile</th>
            <th>Carname</th>
            <th>rate</th>
            <th>status</th>
            <th>payment</th>
            <th>photo</th>
            <th>picking_up_date</th>
            <th>dropping_off_date</th>
        </tr>
        @foreach($data as $datas)
        <tr>
            
            <td>{{$datas->name}}</td>
            <td>{{$datas->mobile}}</td>
            <td>{{$datas->Carname}}</td>
            <td>{{$datas->rate}}</td>
            <td>{{$datas->status}}</td>
            <td>{{$datas->payment}}</td>
            <td><img src="{{asset('storage/images/' .$datas->photo)}}"alt="images" width="100px" height="100px" ></td>
            <td>{{$datas->picking_up_date}}</td>
            <td>{{$datas->dropping_off_date}}</td>

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