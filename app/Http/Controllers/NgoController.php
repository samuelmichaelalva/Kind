<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNgoRequest;
use App\Models\Ngo;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NgoController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Ngo::class, 'ngo');
    }

    public function index(): View
    {
        return view('stitch.ngo-directory', ['ngos' => Ngo::query()->latest()->get()]);
    }

    public function create(): View
    {
        return view('stitch.ngo-directory');
    }

    public function store(StoreNgoRequest $request): RedirectResponse
    {
        $request->user()->ngos()->create($request->validated());

        return redirect()->route('ngo-directory');
    }

    public function show(Ngo $ngo): RedirectResponse
    {
        return redirect()->route('ngo-directory');
    }

    public function edit(Ngo $ngo): View
    {
        return view('stitch.ngo-directory', ['ngo' => $ngo]);
    }

    public function update(StoreNgoRequest $request, Ngo $ngo): RedirectResponse
    {
        $ngo->update($request->validated());

        return redirect()->route('ngo-directory');
    }

    public function destroy(Ngo $ngo): RedirectResponse
    {
        $ngo->delete();

        return redirect()->route('ngo-directory');
    }
}
