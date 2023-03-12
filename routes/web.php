<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    TesteController
};

use App\Http\Controllers\{
    ProductController
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

Route::any('products/search', [ProductController::class, 'search'])->name('products.search');

Route::resource('products', ProductController::class); //->middleware('auth')

// Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
// Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
// Route::get('products', [ProductController::class, 'index'])->name('products.index');
// Route::post('products', [ProductController::class, 'store'])->name('products.store');

Route::get('/login', function() {
    return 'Login';
})->name('login');

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
/*
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
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
