<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;

class BusinessController extends Controller
{
    public function index()
    {
        //PEGAR TODOS OS REGISTROS:
        $businesses = Business::all();
        //dd($businesses);

        //ENCONTRAR UM ÚNICO REGISTRO:
        $business = Business::find(1);       

        //PEGAR UM REGISTRO COM WHERE(ONDE) OBS: VEM UMA COLEÇÃO:
        $businessWhere = Business::where('name', 'Boyle Ltd')->get();

        //PARA VIR UM ITEM SÓ (SEM COLEÇÃO):
        $businessWhereFirst = Business::where('name', 'Boyle Ltd')->first();
        dd($businessWhereFirst, $businessWhere ,$business, $businesses);

        //PEGANDO USER COM O ID 1
        $user1 = User::find(1);
        dd($user1);
    }
}
