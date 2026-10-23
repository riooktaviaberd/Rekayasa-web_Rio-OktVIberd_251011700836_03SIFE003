<?php

namespace App\Http\Controllers;

use App\Models\Startup;

class StartupController extends Controller
{
    public function index()
    {
        $startups = Startup::orderBy('name')->get();

        return view('startups.index', compact('startups'));
    }
    public function show($id)
    {
        $startup = Startup::findOrFail($id);

        return view('startups.show', compact('startup'));
    }
}
