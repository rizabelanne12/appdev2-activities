<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_studentController extends Controller
{
    public function index (){

        $students = DB::table('students')->get();

        return ($students);
    }
}
