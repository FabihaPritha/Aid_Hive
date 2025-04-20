<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        return view('donations.index', compact('donations'));
    }

    public function create()
    {
        return view('donations.create');
    }

    public function store(Request $request)
    {
        Donation::create($request->all());
        return redirect()->route('donations.index');
    }

    public function edit(Donation $donation)
    {
        return view('donations.edit', compact('donation'));
    }

    public function update(Request $request, Donation $donation)
    {
        $donation->update($request->all());
        return redirect()->route('donations.index');
    }

    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('donations.index');
    }
}
