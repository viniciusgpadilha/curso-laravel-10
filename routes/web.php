<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    TesteController
};

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

//Trabalhando com grupos de rotas
// Route::middleware([])->group(function() {

//     Route::prefix('admin')->group(function() {

//         Route::namespace('Admin')->group(function() {

//             Route::name('admin.')->group(function() {
//                 Route::get('/dashboard', [TesteController::class, 'dashboard'])->name('dashboard');
            
//                 Route::get('/financeiro', [TesteController::class, 'financeiro'])->name('financeiro');
                
//                 Route::get('/produtos', [TesteController::class, 'products'])->name('products');
        
//                 Route::get('/', function() {
//                     return redirect()->route('admin.dashboard');
//                 })->name('admin.home');
//             });
//         });
//     });
// });

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
], function(){
    Route::name('admin.')->group(function() {
        Route::get('/dashboard', [TesteController::class, 'dashboard'])->name('dashboard');
    
        Route::get('/financeiro', [TesteController::class, 'financeiro'])->name('financeiro');
        
        Route::get('/produtos', [TesteController::class, 'products'])->name('products');

        Route::get('/', function() {
            return redirect()->route('admin.dashboard');
        })->name('admin.home');
    });
});

Route::get('/login', function() {
    return 'Login';
})->name('login');

//Redirect utilizando name() e route()
Route::get('redirect3', function() {
    return redirect()->route('url.name');
});

Route::get('/nome-url', function() {
    return 'Hey!';
})->name('url.name');

//Redirecionando rotas
Route::redirect('/redirect1', '/redirect2');

// Route::get('redirect1', function() {
//    return redirect('/redirect2');
//});

Route::get('redirect2', function() {
    return 'Redirect2';
});

//Se tiver uma view simples, sem muitos parâmetro. Use este exemplo
Route::view('/view', 'welcome');

// Route::get('/view', function () {
//     return view('welcome');
// });

//Passando parâmetros na Rota. Se não houver, complementa com o parâmetro estipulado na função
Route::get('/produtos/{idProduct?}', function ($product = '') {
    return "Produto {$product}";
});

//Passando parâmetros na Rota
Route::get('/categoria/{flag}/posts', function ($parametro) {
    return "Posts da categoria: {$parametro}";
});

//Passando parâmetros na Rota
Route::get('/categorias/{flag}', function ($parametro) {
    return "Produtos da categoria: {$parametro}";
});

Route::match(['post', 'get'], '/match', function() {
    return 'match';
});

Route::any('/any', function() {
    return 'Any';
});

Route::get('/empresa', function() {
    return 'Empresa';
});

Route::get('/', function () {
    return 'Olá';
});
