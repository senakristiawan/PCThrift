<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\PcThriftController;
use App\Models\Product;
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
Route::get('/signUp', 'App\Http\Controllers\PcThriftController@register');
Route::post('/saveuser', 'App\Http\Controllers\PcThriftController@saveuser');
Route::get('/signIn','App\Http\Controllers\PcThriftController@login');
Route::post('/ceklogin','App\Http\Controllers\PcThriftController@ceklogin');
Route::post('/logout','App\Http\Controllers\PcThriftController@logout')->name('logout');
Route::post('/profile/change-username','App\Http\Controllers\PcThriftController@changeUsername')->name('change_username');
Route::post('/profile/change-password', 'App\Http\Controllers\PcThriftController@changePassword')->name('change_password');
Route::post('/profile/change-email', 'App\Http\Controllers\PcThriftController@changeEmail')->name('change_email');
Route::post('/profile/change-number', 'App\Http\Controllers\PcThriftController@changeNumber')->name('change_number');
Route::get('/profile', 'App\Http\Controllers\PcThriftController@showdata'); 
Route::get('/bundle-gaming/product-detail/{id}', function($id){
    $product = Product::findOrFail($id);

    $cart = session()->get('cart', []);

    if(isset($cart[$id])){
        $cart[$id]['quantity']++;
    }else{
        $cart[$id] = [
            "product_name" => $product->product_name,
            "photo" => $product->photo,
            "price" => $product->price,
            "quantity"=> 1
        ];
    }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
}

)->name('add_to_cart');

Route::get('/bundle-gaming', function(){
    $products = Product::all();
    return view('bundle-gaming', compact('products'));
})->name('bundle-gaming');

Route::get('/bundle-office', function(){
    $products = Product::all();
    return view('bundle-office', compact('products'));
})->name('bundle-office');

Route::get('/bundle-videoMaking', function(){
    $products = Product::all();
    return view('bundle-videoMaking', compact('products'));
})->name('bundle-videoMaking');

Route::get('/bundle-art', function(){
    $products = Product::all();
    return view('bundle-art', compact('products'));
})->name('bundle-art');

Route::get('/cpu', function(){
    $products = Product::all();
    return view('cpu', compact('products'));
})->name('cpu');

Route::get('/graphic-card', function(){
    $products = Product::all();
    return view('graphic-card', compact('products'));
})->name('graphic-card');

Route::get('/motherboard', function(){
    $products = Product::all();
    return view('motherboard', compact('products'));
})->name('motherboard');

Route::get('/power-supply', function(){
    $products = Product::all();
    return view('power-supply', compact('products'));
})->name('power-supply');

Route::get('/ram', function(){
    $products = Product::all();
    return view('ram', compact('products'));
})->name('ram');

Route::get('/storage', function(){
    $products = Product::all();
    return view('storage', compact('products'));
})->name('storage');

Route::get('/storage', function(){
    $products = Product::all();
    return view('storage', compact('products'));
})->name('storage');

Route::get('/cases', function(){
    $products = Product::all();
    return view('cases', compact('products'));
})->name('cases');

Route::delete('/cart', function(Request $request){
    if($request->id){
        $cart = session()->get('cart');
        if(isset($cart[$request->id])){
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Product successfully removed!');
    }
})->name('remove_from_cart');

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');
Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');
Route::get('/consult', function () {
    return view('consult');
})->name('consult');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/bundle', function () {
    return view('bundle');
})->name('bundle');


Route::get('/build', function () {
    return view('build');
})->name('build');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/manage-order', function () {
    return view('manageOrder');
})->name('manageOrder');

Route::get('/product-bundle', function (Illuminate\Http\Request $request) {
    $image = $request->query('image');
    $name = $request->query('name');
    $price = $request->query('price');

    return view('productBundle', ['image' => $image, 'name' => $name, 'price' => $price]);
})->name('product.show');

// Route::get('/motherboard', function () {
//     return view('motherboard');
// })->name('motherboard');
// Route::get('/ram', function () {
//     return view('ram');
// })->name('ram');
// Route::get('/storage', function () {
//     return view('storage');
// })->name('storage');
// Route::get('/graphic-card', function () {
//     return view('graphic-card');
// })->name('graphic-card');
// Route::get('/power-supply', function () {
//     return view('power-supply');
// })->name('power-supply');
// Route::get('/cases', function () {
//     return view('cases');
// })->name('cases');

// Route::get('bundle-gaming/product-details', function (Illuminate\Http\Request $request) {
//     $image = $request->query('image');
//     $name = $request->query('name');
//     $price = $request->query('price');

//     return view('productInfo', ['image' => $image, 'name' => $name, 'price' => $price]);
// })->name('productDetails.show');

Route::get('/bundle-gaming/{id}', function ($id) {
    // Retrieve the product details based on the $id
    $product = Product::find($id);
    // Pass the product details to the view
    return view('productInfo', compact('product'));
})->name('product-details');

Route::post("/cart/add",[CartController::class, 'add'])->name('cart.add');