<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDonationRequest;
use App\Models\Donation;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DonationController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Donation::class, 'donation');
    }

    public function index(): View
    {
        return view('stitch.browse-donations', ['donations' => Donation::query()->latest()->get()]);
    }

    public function create(): View
    {
        return view('stitch.browse-donations');
    }

    public function store(StoreDonationRequest $request): RedirectResponse
    {
        $request->user()->donations()->create($request->validated());

        return redirect()->route('browse-donations');
    }
}
