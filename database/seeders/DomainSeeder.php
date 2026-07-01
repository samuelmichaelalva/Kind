<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Donation;
use App\Models\Ngo;
use App\Models\Post;
use App\Models\Tag;
use App\Models\VolunteerOpportunity;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::factory(4)->create();
        $tags = Tag::factory(6)->create();
        $ngos = Ngo::factory(3)->create();

        $posts = Post::factory(5)->create();
        foreach ($posts as $post) {
            $post->tags()->attach($tags->random(2));
        }

        Donation::factory(4)->create();
        VolunteerOpportunity::factory(4)->create();
    }
}
