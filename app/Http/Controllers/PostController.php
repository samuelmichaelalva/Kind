<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    public function index(): View
    {
        return view('stitch.home-feed', [
            'posts' => Post::query()->with(['user', 'category', 'tags'])->latest()->get(),
            'categories' => Category::query()->orderBy('name')->get(),
        ]);
    }

    public function create(): View
    {
        return view('stitch.create-post', ['categories' => Category::query()->orderBy('name')->get()]);
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('posts', 'public');
        }

        $request->user()->posts()->create($data);

        return redirect()->route('dashboard');
    }

    public function show(Post $post): RedirectResponse
    {
        return redirect()->route('dashboard');
    }

    public function edit(Post $post): View
    {
        return view('stitch.create-post', [
            'post' => $post,
            'categories' => Category::query()->orderBy('name')->get(),
        ]);
    }

    public function update(StorePostRequest $request, Post $post): RedirectResponse
    {
        $post->update($request->validated());

        return redirect()->route('dashboard');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()->route('dashboard');
    }
}
