<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    /**
     * Show the list of users.
     */
    public function index(): Response
    {
        $users = User::all();
        return Inertia::render('Users', [
            'users' => $users
        ]);
    }
}
