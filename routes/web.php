<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\polesController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CliniqueController;
use App\Http\Controllers\AssurancesController;
use App\Http\Controllers\PolesocialController;
use App\Http\Controllers\PrendreRDVController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\SlidesCliniqueController;
use App\Http\Controllers\polesdexcellenceController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/FAQ', [FAQController::class, 'index'])->name('FAQ');
Route::get('/Clinique', [CliniqueController::class, 'index'])->name('Clinique');
Route::get('/Equipe', [EquipeController::class, 'index'])->name('Equipe');
Route::get('/Recrutement', [RecrutementController::class, 'index'])->name('Recrutement');
Route::get('/Guide', [GuideController::class, 'index'])->name('Guide');
Route::get('/Assurances', [AssurancesController::class, 'index'])->name('Assurances');
Route::get('/Pôle-social', [PolesocialController::class, 'index'])->name('Pôle-social');
Route::get('/poles-dexcellence', [polesdexcellenceController::class, 'index'])->name('poles-dexcellence');
// poles
Route::get('/poles/Chirurgie_réfractive', [polesController::class, 'poles1'])->name('poles1');
Route::get('/poles/Chirurgie_Vitréo_Rétinienne', [polesController::class, 'poles2'])->name('poles2');
Route::get('/poles/Cataracte', [polesController::class, 'poles3'])->name('poles3');
Route::get('/poles/ORTHOPTIE', [polesController::class, 'poles4'])->name('poles4');
Route::get('/poles/PÉDIATRIQUE', [polesController::class, 'poles5'])->name('poles5');
Route::get('/poles/CHIRURGIE', [polesController::class, 'poles6'])->name('poles6');
Route::get('/poles/Bloc_Opératoire', [polesController::class, 'poles7'])->name('poles7');

Route::get('/Prendre_RDV', [PrendreRDVController::class, 'index'])->name('Prendre_RDV');
Route::post('/Prendre_RDV', [PrendreRDVController::class, 'store'])->name('Prendre_RDV.store');



Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/search_users',[UserController::class, 'search']);



Route::get('/Article', [ArticleController::class, 'index'])->name('Article');
Route::get('/search_Article',[ArticleController::class, 'search']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});
Route::resource('RDV', RdvController::class);
Route::get('/search_RDV',[RdvController::class, 'search']);

Route::resource('Blogs', BlogController::class);
Route::get('/search',[BlogController::class, 'search']);

Route::resource('Slides', SlidesCliniqueController::class);
// routes Contact

Route::get('/Contact', [ContactController::class, 'create'])->name('Contact');
Route::post('/Contact', [ContactController::class, 'sendEmail'])->name('send.email');