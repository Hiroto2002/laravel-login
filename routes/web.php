<?php
// 使う場所を書く
use App\Book;
// httpリクエストを使うためのメソッドを呼べる
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * 本の一覧表示（books.blade.php）
 */

 //ブログ一覧画面を表示
// Route::get('/', [BookController::class,'showList'])->name("book.index");
Route::get('/','App\Http\Controllers\BookController@showList')->name("book.index");


/**
 * 本を追加
 */
Route::post("/books",function(Request $request){
    // 
});

/**
 * 本を削除
 */
Route::delete('/book/{book}',function(Book $book){
    // 
});

