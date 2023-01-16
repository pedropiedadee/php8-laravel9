<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {


        $users = User::all();
        return view('users', [
            'users' => $users,
        ]);
    }

    public function show(User $user)
    {
        $team = Team::find(1);
        // $team->users()->sync([2, 3]);
        $team->load('users');
        

        return $team;

        //$user->load('teams');
        // $user->teams()->attach([1, 3]);
        // $user->teams()->attach(1);
        // $user->teams()->sync([2, 3]);
        // $user->teams()->syncWithoutDetaching(2);
        // $user->teams()->detach(3);
        return $user;

        return view ('user', [
            'name' => 'Pedro Piedade',
            'user' => $user,
        ]);
    }

}
