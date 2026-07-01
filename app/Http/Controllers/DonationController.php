<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDonationRequest;
use App\Models\Category;
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
        return view('stitch.browse-donations', [
            'donations' => Donation::query()->with('category')->latest()->get(),
            'categories' => Category::query()->orderBy('name')->get(),
        ]);
    }

    public function create(): View
    {
        return view('stitch.browse-donations', ['categories' => Category::query()->orderBy('name')->get()]);
    }

    public function store(StoreDonationRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('donations', 'public');
        }

        $request->user()->donations()->create($data);

        return redirect()->route('browse-donations');
    }

    public function show(Donation $donation): RedirectResponse
    {
        return redirect()->route('browse-donations');
    }

    public function edit(Donation $donation): View
    {
        return view('stitch.browse-donations', [
            'donation' => $donation,
            'categories' => Category::query()->orderBy('name')->get(),
        ]);
    }

    public function update(StoreDonationRequest $request, Donation $donation): RedirectResponse
    {
        $donation->update($request->validated());

        return redirect()->route('browse-donations');
    }

    public function destroy(Donation $donation): RedirectResponse
    {
        $donation->delete();

        return redirect()->route('browse-donations');
    }
}
