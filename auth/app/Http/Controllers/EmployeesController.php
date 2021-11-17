<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\employees;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
        function list(){
        //return "Hey!!";
      // return DB::connection('mysq')->table('products')->get();
        return employees::all();
    }
}
