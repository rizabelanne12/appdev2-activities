<?php

use App\Http\Controllers\DB_studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/students', [DB_studentController::class, 'index']);

// Route::get('/students', function(){
//     $students = DB::table('students')->get();

//     return ($students);
// });

// Route::get('/students', function(){
//     $students = DB::table('students')->WHERE('grade' ,'=',10)->get();

//     return ($students);
// });

// Route::get('/students', function(){
//     $students = DB::table('students')->whereBETWEEN('age', [15,18] )->get();

//     return ($students);
// });


// Route::get('/students', function(){
//     $students = DB::table('students')->orderBy('age', 'DESC' )->get();

//     return ($students);
// });

// Route::get('/students', function(){
//     $students = DB::table('students')
//     ->select('students.*','teachers.name AS teacher_name')
//     ->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
//     ->get();

//     return ($students);
// });

// Route::get('/teachers', function(){
//     $teachers = DB::table('teachers')
//     ->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
//     ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
//     ->groupBy('teachers.id')
//     ->get();

//     return ($teachers);
// });

// Route::get('/students', function(){
//     $students = DB::table('students')
//     ->select('students.*','teachers.name AS teacher_name')
//     ->join('teachers', 'students.teacher_id', '=', 'teachers.id')
//     ->get();

//     return ($students);
// });


// Route::get('/students', function(){
//     $students = DB::table('students')
//     ->select('students.*', DB::raw('AVG(scores.score) AS average_score'))
//     ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
//     ->groupBy('students.id')
//     ->get();

//     return ($students);
// });

// Route::get('/', function(){
//     $teachers = DB::table('teachers')
//     ->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
//     ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
//     ->groupBy('teachers.id')
//     ->orderByDesc('student_count')
//     ->limit(5)
//     ->get();

//     return ($teachers);
// });

