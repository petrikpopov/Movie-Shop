@extends('main')

@section('content')
    <h1>Products</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
                <p>Category: {{ $product->category->name }}</p>
            </li>
        @endforeach
    </ul>
@endsection
