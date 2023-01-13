<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;

class BusinessController extends Controller
{
    public function index()
    {          
        $business = Business::find(1)->delete();
        
        $business = Business::find(1);
        dd($business->toSql());

        $business = Business::find(1);
        dd($business->toArray());


    }
}
