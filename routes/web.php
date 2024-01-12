<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [LangController::class, 'index'])->name("accueil");
Route::get('/change', [LangController::class, 'change'])->name('changeLang');

Route::get('/nos-realisations', function () {
    return view('realisation');
})->name("nos_realisations");

Route::get('/a-propos', function () {
    return view('apropos');
})->name("a_propos");

Route::get('/ingenierie-logicielle', function () {
    return view('ing_logiciel');
})->name("ingenierie-logicielle");

Route::get('/marketing-digital', function () {
    return view('marketing_digital');
})->name("marketing-digital");

Route::get('/contactez-nous', function () {
    return view('contact_us');
})->name("contactez_nous");

Route::post('/contact/envoyé', [ContactController::class, 'store'])->name('contact.store');

Route::get('/blog', function () {
    return view('blog-cat3');
})->name("blog");

Route::get('/article/{any}', [HomeController::class,'readArticle'])->name('read_article');

Route::fallback(function () {
    return view('404');
})->name("404");

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/register', function () {
    return view('404');
})->name("register");
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
    
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('/dashboard', function () {return view('backend.dashboard');})->name("dashboard");
        Route::get('/new-article', function () {return view('backend.form-new-article');})->name("new-article");
        Route::post('/articles/create', [HomeController::class,'createArticle'])->name('createArticle');
        Route::view('/articles/all','backend.all_articles')->name('all_articles');
        Route::get('/articles/edit/{id}',[HomeController::class,'editArticle'])->name('editArticle');
        Route::post('/articles/update',[HomeController::class,'updateArticle'])->name('updateArticle');
        Route::get('/setting', function () {return view('backend.setting');})->name("setting");
    });
});