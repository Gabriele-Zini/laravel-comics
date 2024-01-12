@extends('layouts.app')

@section('content')
    <section class="ms_main-section">
        <div class="container">
            <div class="row aling-items-center">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-3 col-lg-2 card ms_card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }} Thumbnail">
                        <p class="mt-2">Price: {{ $comic['price'] }}</p>
                        <p class="mt-0">Series: {{ $comic['series'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
