<?php

namespace App\Http\Controllers;
use App\Models\User; //da importare il tipo
use Illuminate\Http\Request;

class UserDetails extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,User $user)
    {
        return $user;
    }
}
