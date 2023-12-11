<header class="text-uppercase fw-bold">
    <div class="container-fluid text-center">
        <div class="up-header">
            <ul class="d-flex flex-row-reverse">
                <li>dc powersmvisa</li>
                <li>additional dc sites &downarrow;</li>
            </ul>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-3">
                <img src=" {{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">   
            </div>
            <div class="col-6 ">
                <ul class="d-flex gap-3">
                    <li><a href="{{ route('characters') }}">charachters</a></li>
                    <li><a href="">comis</a></li>
                    <li><a href="">movies</a></li>
                    <li><a href="">tv</a></li>
                    <li><a href="">games</a></li>
                    <li><a href="">collects</a></li>
                    <li><a href="">videos</a></li>
                    <li><a href="">fans</a></li>
                    <li><a href="">news</a></li>
                    <li><a href="">shop &downarrow;</a></li>
                </ul>
            </div>
            <div class="col-3">
                <span>
                    <input type="text" placeholder="Search">
                    <span>&star;</span>
                </span>
            </div>
        </div>
    </div>  
</header>