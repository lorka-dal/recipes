<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = \App\Models\Recipe::all();
    return view('welcome', ['recipes' =>$data]);
})->name('index');

Route::get('/show/{id}', function (string $id) {
    $data = \App\Models\Recipe::findOrFail($id);
    return view('show', ['recipe' =>$data]);
})->where('id', '[0-9]+')->name('show');

Route::get('/create', function () {
    return view('edit', ['recipe'=>[]]);
})->name('create');

Route::get('/update/{id}', function (string $id) {
    $data = \App\Models\Recipe::findOrFail($id);
    return view('edit', ['recipe' =>$data]);
})->where('id', '[0-9]+')->name('update');

Route::post('/store', function (Request $request) {
    $validated = $request->validate([
        'id' => 'integer',
        'name' => 'required|max:100',
        'ingredients' => 'required',
        'recipe' => 'required',
    ]);
    if(array_key_exists("id", $validated)){
        $data = \App\Models\Recipe::findOrFail($validated['id']);
        $data->name = $validated['name'];
        $data->recipe = $validated['recipe'];
        $data->ingredients = $validated['ingredients'];
        $data->save();
    }else{
        \App\Models\Recipe::create([
            'name' => $validated['name'],
            'recipe' => $validated['recipe'],
            'ingredients' => $validated['ingredients']
        ]);
    }
    return redirect(route('index'));
})->where('id', '[0-9]+')->name('store');

Route::get('/delete/{id}', function (string $id) {
    $data = \App\Models\Recipe::findOrFail($id);
    $data->delete();
    return redirect(route('index'));
})->where('id', '[0-9]+')->name('delete');
