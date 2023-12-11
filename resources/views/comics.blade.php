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
            <div class="card">
              {{ $comic["title"] }}
            </div>
            <p>{{ $comic["description"] }}</p>
            <img src="{{ $comic['thumb'] }}" alt="">
          @endforeach
        </div>
      </div>
    </section>
@endsection