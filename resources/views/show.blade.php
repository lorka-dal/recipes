<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recipes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-5">
    <div class="row">
        <div class="card col m-2" style="min-width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h1 class="card-title">{{$recipe->name}}</h1>
                <h3>Ингридиенты</h3>
                <p  style="white-space: pre-wrap">{{$recipe->ingredients}}</p>
                <h3>Рецепт</h3>
                <p style="white-space: pre-wrap">{{$recipe->recipe}}</p>
                <a href="{{route('update', ['id' => $recipe->id])}}" class="card-link">редакт</a>
                <a href="{{route('index')}}" class="card-link">назад</a>
                <p class="mt-3">Cоздан: {{$recipe->created_at->format('Y-m-d')}}</p>
                <p>Обновлен: {{$recipe->updated_at->format('Y-m-d')}}</p>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
