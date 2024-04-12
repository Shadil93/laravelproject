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
            <div class="col-4">

            </div>
           
            <div class="col-4">
            <button><a href="{{route('admin')}}" class="btn btn-success ">back</a></button>
            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3>upload car</h3>
                <Form Action="{{route('do_upload')}}" Method="POST" enctype="multipart/form-data">
                  @csrf
                    <label>Carname</label>
                    <input type="text" name="Carname" class="form-control">
                    <label>models</label>
                    <input type="text"  name="models" class="form-control">
                    <label>rate</label>
                    <input type="text" name="rate" class="form-control">
                    <label>location</label>
                    <input type="text" name="location" class="form-control">
                    <label>photo</label>
                    <input type="file" name="photo" class="form-control">
                    <input type="submit" class="btn btn-success">
                </Form>
  </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>