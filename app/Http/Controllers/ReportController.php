<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportRequest;
use App\Models\Report;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Report::class, 'report');
    }

    public function index(): View
    {
        return view('stitch.admin-dashboard', ['reports' => Report::query()->latest()->get()]);
    }

    public function store(StoreReportRequest $request): RedirectResponse
    {
        $request->user()->reports()->create($request->validated());

        return back();
    }
}
