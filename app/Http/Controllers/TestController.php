<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        $user = User::find(1);
        dd($user->can('create-tasks'));
        dd($user->can('manage-users'));
    }
}
