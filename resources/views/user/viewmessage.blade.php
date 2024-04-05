@extends('user.layout')
@section('content')
<div class="container">
    <div class="row">
      
        <div class="col-12 d-flex mt-5">
        @foreach($msg as $msgs)
            <div class="card w-25 mx-2 bg-secondary text-light">
                <div class="card-body">
                   
                    <strong>
             {{ $msgs->created_at }}  <br>
                {{ $msgs->message }}
         
                    </strong>
          
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection