@extends('layout/main')

@section('container')
<div class="header">
    <div class="header-txt" style="color: #f7f6e7;">
        <h1>The best recipe</h1>
        <h1>for your healthy body</h1>
    </div>
</div>

<div class="title">
    <h2>Recipee</h2>
</div>

{{-- {{ dd($collection) }} --}}
<section class="gallery-sect ">
    <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
            @foreach ($collection['recipes'] as $item)
                <div class="card my-card col me-3 ms-4" style="width: 18rem;">
                    <img src="{{$item['image']}}" class="card-img-top gallery-item mt-2" alt="Food-photos">
                    <div class="card-body">
                        <h5 class="card-title">{{$item['title']}}</h5>
                        <p class="card-text">Source : {{ $item['creditsText'] }}</p>
                        <a href="/detail/{{ $item['id'] }}" class="btn btn-primary">Check it!</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection