<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::updateOrCreate(
            ['slug' => 'future-web-development-laravel-nextjs'],
            [
                'title' => 'The Future of Web Development with Laravel & Next.js',
                'excerpt' => 'Exploring how the combination of Laravel backends and Next.js frontends is redefining modern web architecture.',
                'content' => 'Full article content about the synergy between Laravel and Next.js...',
                'thumbnail' => 'https://images.unsplash.com/photo-1587620962725-abab7fe55159?q=80&w=2662&auto=format&fit=crop',
                'status' => 'published',
                'published_at' => now(),
            ]
        );
    }
}
