@extends('layouts.app')

@section('content')

    <section class="pt-5 pb-3">
        <div class="container">
            <h2>CURRENT Comics</h2>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic["title"] }}</h5>
                                <p class="card-text">{{ $comic["description"] }}</p>
                                <img src="{{ $comic['thumb'] }}" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection