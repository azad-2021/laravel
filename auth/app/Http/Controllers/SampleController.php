<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SampleController extends BaseController
{
    public function listemployees(){
        $all_employees = employees::all();
        echo "<pre>";
        print($all_employees);
    }
}
