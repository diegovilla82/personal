<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Licencia\Index as IndexLicencia;
use App\Http\Livewire\Admin\Employee\Index as IndexEmployee;
use App\Http\Livewire\Admin\Role\Index as IndexRole;
use App\Http\Livewire\Admin\Permission\Index as IndexPermission;
use App\Http\Livewire\Front\Usuario\CargarLicencia as CargarLicencia;
use App\Http\Livewire\Front\LicenciaUsuario\Index as IndexLicenciaUsuario;
use App\Http\Livewire\Admin\User\Index as IndexUser;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:super-admin|admin'])
    ->prefix('admin')->group(function () {
    Route::get('/licencias', IndexLicencia::class)->name('licencia.list');
    Route::get('/empleados', IndexEmployee::class)->name('employee.list');
    Route::get('/roles', IndexRole::class)->name('role.list');
    Route::get('/permission', IndexPermission::class)->name('permission.list');
    Route::get('/users', IndexUser::class)->name('users.index.admin');
});

Route::middleware('auth')
    ->prefix('usuario')->group(function () {
    Route::get('/licencias-solicitadas', IndexLicenciaUsuario::class)->name('licencia.solicitadas');
});
Route::middleware('auth')
    ->group(function () {
    Route::get('/cargar-licencia', CargarLicencia::class)->name('cargar.licencia');
});

require __DIR__.'/auth.php';

