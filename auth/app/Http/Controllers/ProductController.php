<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    function list(){
        //return "Hey!!";
      // return DB::connection('mysq')->table('products')->get();
        return Product::all();
    }
    
}
