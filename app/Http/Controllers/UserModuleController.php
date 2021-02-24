<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserModuleController extends Controller
{
    public function index(User $user)
    {

        $modules = $user->modules()->with(['user'])->paginate(5);

        return view('users.modules.index', [
            'user' => $user,
            'modules' => $modules
        ]);
    }
}
