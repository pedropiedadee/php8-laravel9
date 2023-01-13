<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Business::create([
            'name' => 'Joh Snow',
            'email' => 'johsnow@gmail.com',
            'address' => 'Rua A Quadra B',
        ]);

        dd($business);
    }
}
