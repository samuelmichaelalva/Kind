<?php

namespace App\Http\Controllers;

use App\Models\NotificationModel;
use Illuminate\View\View;

class NotificationController extends Controller
{
    public function index(): View
    {
        return view('stitch.notifications', ['notifications' => NotificationModel::query()->where('user_id', auth()->id())->latest()->get()]);
    }
}
