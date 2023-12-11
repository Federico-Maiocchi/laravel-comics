@extends('layouts.app')


@section('content')
    <div>





    </div>
    <div class="container">
       <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text"> {{ $comic['title'] }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
       </div>
    </div>
@endsection