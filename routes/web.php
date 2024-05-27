<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/contact', function () {
    return view('contact');
});
*/

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');

Route::get('/login', function(){ return 'Login';})->name('site.login');

// /app
Route::prefix('/app')->group(function()
{
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');
});


// Rotas alternativas

Route::get('/rota1', function() 
{
    echo 'Rota 1';
})->name('site.rota1');


/*
Route::get('/rota2', function() 
{
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::redirect('/rota2', '/rota1');
*/

// Rota de fallback

Route::fallback(function() 
{
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});

Route::get('/teste/{p1}/{p2}', 'App\Http\Controllers\TesteController@teste')->name('site.teste'); 



