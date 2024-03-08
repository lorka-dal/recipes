<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recipes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-5">
    <h1>Список рецептов</h1>  <a href="{{route('create')}}" class="card-link">новый</a>
    <div class="row">
        @foreach($recipes as $recipe)
            <div class="card col m-2" style="min-width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{route('show', ['id' => $recipe->id])}}"><h5 class="card-title">{{$recipe->name}}</h5></a>
                    <p>{{$recipe->ingredients}}</p>
                    <a href="{{route('update', ['id' => $recipe->id])}}" class="card-link">редакт</a>
                    <a href="{{route('delete', ['id' => $recipe->id])}}" class="card-link">удалить</a>
                    <p>Cоздан: {{$recipe->created_at->format('Y-m-d')}}</p>
                </div>
            </div>
        @endforeach
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
