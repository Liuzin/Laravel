 <?php

 use App\Task;

 use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('tasks');
});
//отобразить
Route::get('/task/{id}', function ($id) {
    //
});
//добавить новую задачу
Route::post('/task', function (Request $request) {
    $task = new Task;
	$task->name = $request->name;
	$task->description = $request->descr;
	$task->importance = $request->priority;
	
	$task->save();
	
	return redirect('/');
});
/*Route::post('/task', function(Request $request) {
    $name = $request->name;
    $description = $request->descr;
    
	$importance = $request->priority;

    DB::insert('insert into tasks (name,description,importance) values(?,?,?)', [$name,$description,$importance]);
});*/
//удалить
Route::delete('/task/{id}', function ($id) {
    //
});

Route::get('/author', function () {
    return view('author');
});
Route::get('/kathy', function () {
    return view('kathy');
});