<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
    public function index()
    {          
        $businesses = Business::all();

        return view('businesses', [
            'businesses' => $businesses,
        ]);



        // $business = Business::find(1)->delete();
        
        // $business = Business::find(1);
        // dd($business->toSql());

        // $business = Business::find(1);
        // dd($business->toArray());


    }


    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            //'address' => 'string',
        ]);

        $business = Business::create($input);

        return Redirect::route('businesses.index');
    }
}
