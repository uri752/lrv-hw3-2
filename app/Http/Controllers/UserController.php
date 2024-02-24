<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * Show user profile.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('user.profile', auth()->user()->getAttributes());
    }
}