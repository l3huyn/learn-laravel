<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// ---- Định tuyến cơ bản

//Route dẫn đến trang bài viết
// Route::get('/post', function () {
//     return "Đây là trang bài viết";
// });

//Route dẫn đến trang quản lý sản phẩm ở admin
// Route::get('/admin/product', function () {
//     return "Trang quản lý sản phẩm";
// });

// //Route dẫn đến trang thêm sản phẩm
// Route::get('/admin/product/add', function () {
//     return "Trang thêm sản phẩm";
// });


// // ----- Định tuyến có tham số

// // Route bài viết với tham số là id 
// Route::get('posts/{id}', function($id) {
//     return $id;
// });

// //Route danh sách bài viết theo danh mục kèm phân trang
// Route::get('posts/{cat_id}/page/{page}', function($cat_id, $page) {
//     return "ID danh mục: ".$cat_id. "--" ."Trang: ".$page;
// });


// // ----- Đặt tên cho route

// //Đặt tên route dẫn đến trang profile
// Route::get('users/profile', function() {
//     return route('profile');
// }) -> name('profile');

// //Đặt tên route dẫn đến trang thêm sản phẩm
// Route::get('/admin/product/add', function () {
//     return route('product.add');
// }) -> name('product.add');


// //----- Định tuyến có tham số tùy chọn yes - no 
// // domain.com/users => Hiển thị danh sách users
// // domain.com/users/7 => Hiển thị thông tin chi tiết user có id là 7

// Route::get('users/{id?}', function($id = 0) {
//     return $id;
// });


// //----- Định tuyến với tham số có ràng buộc biểu thức chính quy

// //Định tuyến 1 tham số có ràng buộc biểu thức chính quy
// Route::get('product/{id}', function($id) {
//     return $id;
// }) -> where('id', '[0-9]+'); 


// //Định tuyến nhiều tham số có ràng buộc biểu thức chính quy
// // Route::get('product/{slug}/{id}', function($slug, $id) {
// //     return $slug . '------' . $id;
// // }) -> where(['slug' => '[A-Za-z0-9-_]+']); 


// // ----- Định tuyến đến một view
// // domain.com/welcome => view('welcome)
// Route::view('/welcome', 'welcome');

// //Định tuyến đến view POST
// // Route::view('/post', 'post');

// //Truyền dữ liệu từ route đến view POST
// Route::view('/post', 'post', ['id' => 20]);


// // ---- Định tuyến qua một controller
// Route::get('/post/{id}', [PostController::class, 'detail']);


// // ----- Bài tập Routing

// // Trang thêm bài viết
// Route::get('/admin/post/add', function() {
//     return "Trang thêm bài viết";
// });

// // Trang danh sách bài viết nếu tồn tại ID thì sẽ vào chi tiết bài viết 
// Route::get('/admin/post/{id?}', function($id = 0) {
//     return $id;
// });

// // Trang cập nhật bài viết
// Route::get('/admin/post/update/{id}', function($id) {
//     return "Cập nhật bài viết có ID: " . $id;
// });

// // Trang xóa bài viết
// Route::get('/admin/post/delete/{id}', function($id) {
//     return "Xóa bài viết có ID: " . $id;
// });


// // ----- Gọi controller từ Route nâng cao

// //Định tuyến route gọi đến phương thức show ở ProductController 
// Route::get('/product/show/{id}', [ProductController::class, 'show']);

// //Định tuyến route gọi đến phương thức create ở ProductController 
// Route::get('/product/create', [ProductController::class, 'create']);

// //Định tuyến route gọi đến phương thức update ở ProductController 
// Route::get('/product/update/{id}', [ProductController::class, 'update']);



// -- Định tuyến route cho controller kiểu resource
// Route::resource('post', PostController::class);

//Dịnh tuyên bài tập
// Route::get('/admin/post/show', [AdminPostController::class, 'show']);
// Route::get('/admin/post/add', [AdminPostController::class, 'add']);
// Route::get('/admin/post/update/{id}', [AdminPostController::class, 'update']);
// Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete']);

// Định tuyến đến PostController
// Route::get('post/index', [PostController::class, 'index']);

// // Định tuyến dẫn đến AdminPostController
// Route::get('admin/post/show', [AdminPostController::class, 'show']);


Route::get('child', function() {
    return view('child');
});

Route::get('product', function() {
    return view('product');
});


