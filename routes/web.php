<?php

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

Route::get('Controller','MyController@xinchao');


Route::get('View','MyController@myView');


// Route::get('{ten}',function($ten){
// 	echo $ten." Bạn Thật Đẹp Trai";
// });


Route::get('database',function(){
	// Schema::create('loaisanpham',function($table){
	// 	$table->increments('id');
	// 	$table->string('ten',200);
	// });
	// echo "Tạo Bảng Thành Công";

	Schema::create('theloai',function($table){
		$table->increments('id');
		$table->string('ten',200)->nullable();
		$table->string('nsx')->default('Nha San Xuat');
	
	});
	echo "Lại Tạo Bảng Thành Công";
});

Route::get('lienketbang',function(){
	Schema::create('sanpham',function($table){
		$table->increments('id');
		$table->string('ten');
		$table->float('gia');
		$table->integer('soluong')->default(0);
		$table->integer('id_loaisanpham')->unsigned();
		$table->foreign('id_loaisanpham')->references('id')->on('loaisanpham');
	});
	echo "Tiếp Tục Tạo Thành Công";
});
