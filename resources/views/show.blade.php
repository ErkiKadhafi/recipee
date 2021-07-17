@extends('layout/main')
{{-- {{ dd($item['analyzedInstructions'][0]['steps']) }} --}}

@section('container')
<div class="header">
    <div class="header-txt" >
        <h1>The best recipe</h1>
        <h1>for your healthy body</h1>
    </div>
</div>

<div class="title">
    <h2>Recipee</h2>
</div>
<section class="details">
    <!-- Receipe Content Area -->
    <div class="receipe-content-area">
        <div class="container">

            <div class="row">
                <div class="img-details">
                 <img src="{{$item['image']}}" alt="Food-image"/>
                </div>
                <div class="col-8 col-md-8">
                    <div class="receipe-headline my-5">
                        <span>April 05, 2018</span>
                        <h2>{{ $item['title'] }}</h2>
                        <div class="receipe-duration">
                            <h6>Ready in: {{ $item['readyInMinutes'] }} mins</h6>
                            <h6>Yields: {{ $item['servings'] }} Servings</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="receipe-ratings text-right my-5">
                        <form method="POST" action="detail/{{$item['id'] }}" >
                            @csrf
                            <input type="text" class="form-control" id="id_makanan" name="id_makanan" value="{{ $item['id'] }}" hidden>
                            <input type="text" class="form-control" name="nama" name="nama" value="{{ $item['title'] }}" hidden>
                            <a type="submit" href="/" class="btn delicious-btn">Add to My Recipes</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Preparation Step -->
                    @foreach ($item['analyzedInstructions'][0]['steps'] as $step)
                    <div class="single-preparation-step d-flex">
                        @if($loop->index+1<10)
                            <h4>0{{$loop->index+1}}.</h4>
                        @endif
                        @if($loop->index+1>=10)
                            <h4>{{$loop->index+1}}.</h4>
                        @endif
                        <p>{{ $step['step'] }} </p>
                    </div>
                    @endforeach
    
                </div>

                <!-- Ingredients -->
                <div class="col-12 col-lg-4">
                    <div class="ingredients">
                        <h4>Ingredients</h4>
                        @foreach ($item['extendedIngredients'] as $step)
                        <div class="custom-control">
                            <label class="custom-control-label" >{{ $step['original'] }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
</section>
@endsection