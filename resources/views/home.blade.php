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
    <div class="bg-primary">
        <div class="container">
            <ul class="d-flex justify-content-between align-items-center text-light py-4 m-0 text-uppercase">
                <li>
                    <img class="img-buy" src=" {{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <a href="#">digital comics</a>
                </li>
                <li>
                    <img class="img-buy" src=" {{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <a href="#">dc merchandse</a>
                </li>
                <li>
                    <img class="img-buy" src=" {{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <a href="#">subscription</a>
                </li>
                <li>
                    <img class="img-buy" src=" {{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <a href="#">comic shop locator</a>
                </li>
                <li>
                    <img class="img-buy" src=" {{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <a href="#">dc power visa</a>
                </li>
            </ul>
        </div>
    </div>

    
@endsection