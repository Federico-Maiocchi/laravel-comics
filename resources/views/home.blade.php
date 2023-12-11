@extends('layouts.app')


@section('content')
    <div class="bg-dark">
        <div>
            <img class="img-hero" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
        </div>
        <div class="container py-5 position-relative">
            <div>
                <button type="button" class="btn btn-primary fs-3 position-absolute top-0 start-0 translate-middle">current series</button>
            </div>
            <div class="row h-100">
                 @foreach ($comics as $comic)
                     <div class="col-2 h-100 py-2">
                         <div class="card h-100 " >
                             <img src="{{ $comic['thumb'] }}" class="card-img-top img-thumbnail" alt="...">
                             <div class="card-body">
                                 <h5 class="card-text"> {{ $comic['series'] }}</h5>
                             </div>
                         </div>
                     </div>
                 @endforeach
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary fs-3">load more</button>
            </div>
         </div>
    </div>
    
@endsection