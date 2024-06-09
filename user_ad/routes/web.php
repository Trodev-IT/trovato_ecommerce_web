<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegistration;
use App\Http\Controllers\Categories;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


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


Route::get('/',[LoginRegistration::class,'login'])->name('login');

Route::get('/register',[LoginRegistration::class,'registration'])->name('register');

Route::post('/registration',[LoginRegistration::class,'createRegistration'])->name('registration');

Route::post('/check-email-availability', [LoginRegistration::class, 'checkEmailAvailability'])->name('check-email-availability');

Route::post('/login',[LoginRegistration::class,'logged'])->name('logged');


// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
//     $request->fulfill();
//     $userId = $request->user()->id;
//     event(new \Illuminate\Auth\Events\Verified($request->user()));
//     return redirect()->route('welcome', ['id' => $userId]); // Pass the user's ID as a parameter
// })->middleware(['auth', 'signed'])->name('verification.verify');


// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth'])->name('verification.send');

Route::get('/forgot-password',[LoginRegistration::class,'forget_password'])->middleware('guest')->name('password.request');

Route::post('/forget-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = \Illuminate\Support\Facades\Password::sendResetLink(
        $request->only('email')
    );

    return $status === \Illuminate\Support\Facades\Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)])->withInput();
})->name('password.email');

Route::get('/reset-password/{token}',[LoginRegistration::class,'showResetForm'])->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = \Illuminate\Support\Facades\Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (\App\Models\User $user, string $password) {
            $user->forceFill([
                'password' => $password,
            ])->setRememberToken(\Illuminate\Support\Str::random(5));

            $user->save();

            event(new \Illuminate\Auth\Events\PasswordReset($user));
        }
    );

    return $status === \Illuminate\Support\Facades\Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __('Password reset successfully.'))
        : back()->withErrors(['email' => [__($status)]])->withInput();
})->name('password.update');

Route::get('logout',[LoginRegistration::class,'logout'])->name('logout');

Route::middleware(['auth'])->group(function (){
    Route::get('/welcome/{id}',[LoginRegistration::class,'welcome'])->name('welcome');

    Route::get('/category/{id}',[Categories::class,'index'])->name('category');

    Route::get('/category-update/{id}',[Categories::class,'updateIndex'])->name('category-update');

    Route::get('/sub-category/{id}',[Categories::class,'subcategoryIndex'])->name('sub-category');

    Route::get('/sub-category-update/{id}',[Categories::class,'subcategoryUpdate'])->name('subcategoryUpdate');

    Route::get('/discount/all-categories/{id}',[Categories::class,'allcategory'])->name('allcategory');

    Route::get('/discount/all-sub-categories/{id}',[Categories::class,'allsubcategory'])->name('allsubcategory');

    Route::get('/orders/users/{id}',[Categories::class,'users'])->name('users');

    Route::get('/orders/order-delivered/{id}',[Categories::class,'deliveredOrders'])->name('deliveredOrders');

    Route::get('/orders/order-pending/{id}',[Categories::class,'pendingOrders'])->name('pendingOrders');

    Route::get('/products/less-selling/{id}',[Categories::class,'lessSelling'])->name('lessSelling');

    Route::get('/products/most-selling/{id}',[Categories::class,'mostSelling'])->name('mostSelling');

    Route::get('/products/edit-products/{id}/{product}',[Categories::class,'productsUpdate'])->name('productsUpdate');

    Route::get('/deleteCategory',[Categories::class,'deleteCategory'])->name('deleteCategory');

    Route::get('/deleteSubCategory',[Categories::class,'deleteSubCategory'])->name('deleteSubCategory');

    Route::get('/products/{id}',[Categories::class,'productsIndex'])->name('productsIndex');

    Route::get('/deleteProduct',[Categories::class,'deleteProduct'])->name('deleteProduct');

    Route::get('/orders/order-pending/on-the-way/{id}',[Categories::class,'ontheways'])->name('ontheways');

    Route::post('/insertCategory',[Categories::class,'categoryInsert'])->name('categoryInsert');

    Route::post('/updateCategory',[Categories::class,'categoryUpdate'])->name('categoryUpdate');

    Route::post('/insertSubcCategory',[Categories::class,'subcategoryInsert'])->name('subcategoryInsert');

    Route::post('/updateSubCategory',[Categories::class,'subcategory'])->name('subcategory');

    Route::post('/productInsert',[Categories::class,'productInsert'])->name('productInsert');

    Route::post('/prodUp',[Categories::class,'productUpdat'])->name('prodUp');

    Route::post('/insertDate',[Categories::class,'updatePendingOrders'])->name('insertDate');

    Route::post('/updateStatus',[Categories::class,'updateStatus'])->name('updateStatus');

    Route::get('/invoice/{id}',[Categories::class,'invoice'])->name('invoice');
});




