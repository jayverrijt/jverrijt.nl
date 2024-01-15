<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $apps = DB::table('applications')->select('id','appname','description', 'route', 'type')->get();
    return view('dashboard', compact('apps'));
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/settings', function () {
    $apps = DB::table('modify-apps')->select('appname', 'route')->get();
    $selapps = DB::table('applications')->select('id','appname','description', 'route', 'type')->get();
    return view('layouts.dashboardsettings', compact('apps', 'selapps'));
}) ->middleware('auth');

route::get('/settings/dhbd', function () {
    $apps = DB::table('modify-apps')->select('appname', 'route')->get();
    $selapps = DB::table('applications')->select('id','appname','description', 'route', 'type')->get();
    return view('layouts.dashboardsettings', compact('apps', 'selapps'));
}) ->middleware('auth');
route::get('/settings/pofo', function () {
    $apps = DB::table('modify-apps')->select('appname', 'route')->get();
    return view('layouts.portofoliosettings', compact('apps'));
}) ->middleware('auth');

require __DIR__ . '/auth.php';
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();

