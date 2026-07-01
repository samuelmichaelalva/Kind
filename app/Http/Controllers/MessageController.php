<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Message::class, 'message');
    }

    public function index(): View
    {
        return view('stitch.messages', ['messages' => Message::query()->latest()->get()]);
    }

    public function create(): View
    {
        return view('stitch.messages');
    }

    public function store(StoreMessageRequest $request): RedirectResponse
    {
        $request->user()->messages()->create($request->validated());

        return redirect()->route('messages.index');
    }

    public function show(Message $message): View
    {
        return view('stitch.messages', ['message' => $message]);
    }

    public function edit(Message $message): View
    {
        return view('stitch.messages', ['message' => $message]);
    }

    public function update(StoreMessageRequest $request, Message $message): RedirectResponse
    {
        $message->update($request->validated());

        return redirect()->route('messages.index');
    }

    public function destroy(Message $message): RedirectResponse
    {
        $message->delete();

        return redirect()->route('messages.index');
    }
}
