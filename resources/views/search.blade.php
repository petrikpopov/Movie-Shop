@extends('main')

@section('content')
    <h1>Результаты поиска</h1>

    <form action="{{ route('movies.search') }}" method="GET">
        <input type="text" name="query" placeholder="Введите название фильма" value="{{ old('query', $query ?? '') }}">
        <button type="submit">Искать</button>
    </form>

    @if($movies->isEmpty())
        <p>Фильмы не найдены.</p>
        @else
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $movie->poster }}" alt="{{ $movie->name }}" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie->name }}</h4>
                            <p>{{ $movie->director }}</p>
                            <input type="hidden" class="product-quantity" value="1">
                            <p class="btn-holder">
                                <button class="btn btn-outline-danger add-to-cart" data-product-id="{{ $movie->id }}">Add to cart</button>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
