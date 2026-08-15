<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Show the application landing page.
     */
    public function index(): View
    {
        return view('landing', [
            'companyName' => config('company.name', 'NovaCore Technologies'),
            'description' => config('company.description'),
            'email' => config('company.email', 'hello@novacore.tech'),
            'phone' => config('company.phone', '+1 (800) 555-0199'),
            'address' => config('company.address', '750 Innovation Way, San Francisco, CA'),
        ]);
    }
}
