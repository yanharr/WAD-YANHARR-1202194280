    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    // use
    // use

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::prefix('vaccine')->group(function () {
        Route::get('/', [VaccineController::class, 'index'])->name('vaccine.index');
        Route::get('/add', [VaccineController::class, 'add'])->name('vaccine.add');
        Route::post('/store', [VaccineController::class, 'store'])->name('vaccine.store');
        Route::get('/edit/{id}', [VaccineController::class, 'edit'])->name('vaccine.edit');
        Route::post('/update/{id}', [VaccineController::class, 'update'])->name('vaccine.update');
        Route::get('/delete/{id}', [VaccineController::class, 'delete'])->name('vaccine.delete');
    });
    Route::prefix('patient')->group(function () {
        Route::get('/', [PatientController::class, 'index'])->name('patient.index');
        Route::get('/list-vaccine', [PatientController::class, 'listVaccine'])->name('patient.list-vaccine');
        Route::get('/add/{id}', [PatientController::class, 'add'])->name('patient.add');
        Route::post('/store', [PatientController::class, 'store'])->name('patient.store');
        Route::get('/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
        Route::post('/update/{id}', [PatientController::class, 'update'])->name('patient.update');
        Route::get('/delete/{id}', [PatientController::class, 'delete'])->name('patient.delete');
    });
