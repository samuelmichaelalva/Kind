<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Conversation;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ConversationController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Conversation::class, 'conversation');
    }

    public function index(): View
    {
        return view('stitch.messages', ['conversations' => Conversation::query()->latest()->get()]);
    }

    public function store(StoreMessageRequest $request): RedirectResponse
    {
        $conversation = Conversation::firstOrCreate([
            'user_one_id' => min($request->user()->id, $request->recipient_id),
            'user_two_id' => max($request->user()->id, $request->recipient_id),
        ]);

        $conversation->messages()->create([
            'sender_id' => $request->user()->id,
            'recipient_id' => $request->recipient_id,
            'body' => $request->body,
        ]);

        return redirect()->route('messages.index');
    }
}
