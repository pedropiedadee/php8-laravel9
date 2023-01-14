<?php

namespace App\Http\Controllers;

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
        $user->posts()->create([
            'title' => 'Meu primeiro post',
            'content' => 'Esse é meu post',
        ]);
       // $user->posts()->delete();
        dd($user->posts->toArray());
        return view ('user', [
            'name' => 'Pedro Piedade',
            'user' => $user,
        ]);
    }

}
