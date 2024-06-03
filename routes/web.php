<?php



use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\admin\DocumentController;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Controllers\Admin\NewsfeedController;
use App\Http\Controllers\Admin\RepaymentController;
use App\Http\Controllers\admin\StakeholdersController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PastePageController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Auth;
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


//All routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.admin.dashboard');
});

Auth::routes();

// Pages routes//
Route::group(['middleware' => ['web']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('pages.about');
    Route::get('/services', [App\Http\Controllers\PagesController::class, 'services'])->name('pages.services');
    Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('pages.contact');
    Route::get('/terms', [App\Http\Controllers\PagesController::class, 'terms'])->name('pages.terms');
    Route::get('/rules', [App\Http\Controllers\PagesController::class, 'rules'])->name('pages.rules');
    Route::get('/media', [App\Http\Controllers\PagesController::class, 'media'])->name('pages.media');
    Route::get('/LoanTerm', [App\Http\Controllers\PagesController::class, 'LoanTerm'])->name('pages.LoanTerm');
    Route::get('/FAQ', [App\Http\Controllers\PagesController::class, 'FAQ'])->name('pages.FAQ');
    Route::get('/panel', [ AdminController::class,'panel'])->name('panel');
    Route::get('/admin_directive', [ PagesController::class,'index'])->name('blog');
//    Route::get('/blog', [ PagesController::class,'blog'])->name('blog');
    Route::get('/privacyPolicy', [ PagesController::class,'privacyPolicy'])->name('privacyPolicy');


// Tickets routes //

    Route::get('tickets',[TicketsController::class,'index'])->name('tickets.index');
    Route::get('/tickets/create',[TicketsController::class,'create'])->name('tickets.create');
    Route::post('/tickets/create',[TicketsController::class,'store'])->name('tickets.store');

//   // post routes
    Route::get('/blog',[ PastePageController::class,'index'])->name('posts.index');
    Route::post('/blog',[ PastePageController::class,'store'])->name('posts.store');
//    Route::get('/blog',[ PastePageController::class,'show'])->name('posts.show');

// Backend routes
    Route::middleware(['auth', 'auth.admin'])->prefix('admin')->as('admin.')->group(function () {

        Route::get('/members', [ AdminController::class,'members'])->name('members');
        Route::get('/repayment', [ AdminController::class,'PayLoan'])->name('loans');


        Route::get('/dashboard', [ AdminController::class, 'home'])->name('home');
        // user crud

        Route::get('/users',[ UsersController::class,'index'])->name('users.index');
        Route::get('/users/{id}',[ UsersController::class,'show'])->name('users.show');
        Route::get('/users/{id}/edit',[ UsersController::class,'edit'])->name('users.edit');
        Route::delete('/users/{id}/destroy',[ UsersController::class,'destroy'])->name('users.destroy');
        // loan crud
        Route::get('loans', [ LoanController::class, 'index'])->name('loans');
        Route::get('loans/{id}', [ LoanController::class, 'show'])->name('loans.show');
        Route::post('loans', [ LoanController::class, 'store'])->name('loans.store');
        Route::get('loans/{id}/edit', [ LoanController::class, 'edit'])->name('loans.edit');
        Route::delete('loans/{id}/destroy', [ LoanController::class, 'destroy'])->name('loans.destroy');
        // repayment crud
        Route::get('repayments',[ RepaymentController::class,'index'])->name('repayments');
        Route::post('repayments',[ RepaymentController::class,'store'])->name('repayments.store');
        Route::delete('repayments/{id}/destroy',[ RepaymentController::class,'destroy'])->name('repayments.destroy');

        Route::get('stakeholders',[ StakeholdersController::class,'index'])->name('stakeholders');
        // saving crud not needed

//        Route::get('savings', [ SavingController::class,'index'])->name('savings.all');
//        Route::post('savings', [ SavingController::class,'store'])->name('savings.store');
//        Route::get('savings/{id}', [ SavingController::class,'show'])->name('saving.show');
//        Route::get('savings/{id}/edit', [ SavingController::class,'edit'])->name('saving.edit');
//        Route::post('savings/{id}', [ SavingController::class,'update'])->name('saving.update');
//        Route::delete('savings/{id}/destroy', [ SavingController::class,'destroy'])->name('saving.destroy');

        Route::get('document',[DocumentController::class,'index'])->name('document');
        Route::get('newsfeed',[NewsfeedController::class,'index'])->name('newsfeed');
          // transaction crud //
        Route::get('transactions',[TransactionController::class,'index'])->name('transactions.index');
        Route::post('transactions', [ TransactionController::class,'store'])->name('transactions.store');
        Route::get('transactions/{id}', [ TransactionController::class,'show'])->name('transactions.show');
        Route::get('transactions/{id}/edit', [ TransactionController::class,'edit'])->name('transaction.edit');
        Route::post('transactions/{id}', [ TransactionController::class,'update'])->name('saving.update');
        Route::delete('transactions/{id}/destroy', [ TransactionController::class,'destroy'])->name('transaction.destroy');

    });


});




