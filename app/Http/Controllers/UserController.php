<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return User::all();
    }

    public function findOne(Request $r){
        $user =  User::find($r->id);
        $user['addresses'] = $user->addresses;
        return $user;
    }
}
