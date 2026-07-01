<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVolunteerOpportunityRequest;
use App\Models\VolunteerOpportunity;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VolunteerOpportunityController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(VolunteerOpportunity::class, 'volunteerOpportunity');
    }

    public function index(): View
    {
        return view('stitch.volunteer-hub', ['volunteerOpportunities' => VolunteerOpportunity::query()->latest()->get()]);
    }

    public function create(): View
    {
        return view('stitch.volunteer-hub');
    }

    public function store(StoreVolunteerOpportunityRequest $request): RedirectResponse
    {
        $request->user()->volunteerOpportunities()->create($request->validated());

        return redirect()->route('volunteer-hub');
    }

    public function show(VolunteerOpportunity $volunteerOpportunity): RedirectResponse
    {
        return redirect()->route('volunteer-hub');
    }

    public function edit(VolunteerOpportunity $volunteerOpportunity): View
    {
        return view('stitch.volunteer-hub', ['volunteerOpportunity' => $volunteerOpportunity]);
    }

    public function update(StoreVolunteerOpportunityRequest $request, VolunteerOpportunity $volunteerOpportunity): RedirectResponse
    {
        $volunteerOpportunity->update($request->validated());

        return redirect()->route('volunteer-hub');
    }

    public function destroy(VolunteerOpportunity $volunteerOpportunity): RedirectResponse
    {
        $volunteerOpportunity->delete();

        return redirect()->route('volunteer-hub');
    }
}
