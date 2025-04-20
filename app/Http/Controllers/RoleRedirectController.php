<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleRedirectController extends Controller
{
    public function redirect()
    {
        $role = Auth::user()->role;

        return match ($role) {
            'admin' => redirect('/admin/dashboard'),
            'coordinator' => redirect('/coordinator/dashboard'),
            'accountant' => redirect('/accountant/dashboard'),
            'top' => redirect('/top/dashboard'),
            'donor' => redirect('/donor/dashboard'),
            default => abort(403),
        };
    }
}
