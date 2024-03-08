<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recipes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-5">
    @if($recipe)
        <h1>Редактировать</h1>
    @else
        <h1>Создать новый</h1>
    @endif
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('store')}}" method="POST">
            @csrf
            @if($recipe)
                <input type="hidden" name="id" value="{{$recipe->id}}" required readonly>
            @endif
            <input class="form-control m-2" placeholder="название рецепта" type="text" name="name" value="@if($recipe) {{$recipe->name}} @endif" required>
            <textarea class="form-control m-2" placeholder="ингридиенты" name="ingredients" required> @if($recipe) {{$recipe->ingredients}} @endif</textarea>
            <textarea class="form-control m-2" placeholder="рецепт" name="recipe" required>@if($recipe) {{$recipe->recipe}} @endif</textarea>
            <input type="submit" class="btn btn-primary" value="Сохранить">
            <a href="{{route('index')}}" class="card-link">назад</a>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
