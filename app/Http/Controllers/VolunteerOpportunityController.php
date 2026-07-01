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
}
