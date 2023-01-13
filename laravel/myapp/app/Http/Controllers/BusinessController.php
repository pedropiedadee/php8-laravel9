<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;

class BusinessController extends Controller
{
    public function index()
    {          
        //UMA FORMA DE DAR UPDATE
        // $business = Business::find(3);

        //$business->name = 'Pedro Piedade';
        //$business->email = 'johsnow@gmail.com',;
        //$business->address = 'Rua Portugal';
        //$business->save();

        //dd($business);

        
        //OUTRA FORMA
        // $business = Business::find(3)
        //   ->update([
        //     'name' => 'Joh Snow',
        //     'email' => 'johsnow@gmail.com',
        //     'address' => 'Rua do Joh',
        //   ]);
        // dd($business);


        //MAIS UMA FORMA (MAIS UTILIZADA)
        $input = [
            'name' => 'Pedro Piedade',
            'email' => 'laravel@gmail.com',
            'address' => 'Rua Portugal',
        ];

        $business = Business::find(3);
        $business->fill($input);
        $business->save();
        dd($business);

    }
}
