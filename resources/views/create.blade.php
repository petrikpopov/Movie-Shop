<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить фильм</title>
</head>
<body>
    <h1>Добавить фильм</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Название:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="director">Режиссер:</label>
            <input type="text" id="director" name="director" value="{{ old('director') }}" required>
        </div>
        <div>
            <label for="poster">URL постера:</label>
            <input type="url" id="poster" name="poster" value="{{ old('poster') }}" required>
        </div>
        <div>
            <label for="price">Цена:</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" required>
        </div>
        <button type="submit">Добавить фильм</button>
    </form>
</body>
</html>
