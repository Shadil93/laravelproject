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
            <div class="col-1">

            </div>
            <div class="col-3">
            <div class="card" style="width: 64rem;">
  <div class="card-body">
    <h3><u>send notification</u></h3>
    <form action="{{route('do_message')}}" method="POST" >
        @csrf
    <input type="hidden" name="register_id" value="{{ $userid->id }}" class="form-control">


    <label>Message</label>
    <input type="text" name="message" class="form-control">
    <button type="submit" class="btn btn-success">submit</button>
    </form>




    
  </div>
            </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>