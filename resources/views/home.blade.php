@extends('layouts.app')

@section('content')
    <section class="ms_main-section">
        <div class="container">
            <button class="ms_btn ms_middle-btn">current series</button>
            <div class="row aling-items-center">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-3 col-lg-2 card ms_card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }} Thumbnail">
                        <p class="mt-2">Price: {{ $comic['price'] }}</p>
                        <p class="mt-0">Series: {{ $comic['series'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <button class=" ms_btn">load more</button>
            </div>
        </div>
    </section>
@endsection
