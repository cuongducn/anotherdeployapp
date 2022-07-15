<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use PDO;

class UsersController extends Controller
{
    public function getAllUser(Request $request)
    {
        return User::all();
    }
}
