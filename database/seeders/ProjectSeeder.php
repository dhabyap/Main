<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'MySuzuki',
                'type' => 'Full-Stack Development',
                'description' => 'Admin dashboard for booking service with role-based access, REST API for mobile apps, and frontend using Next.js. Integrated with payment gateway.',
                'thumbnail' => 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?q=80&w=2574&auto=format&fit=crop',
                'tags' => ['Next.js', 'Laravel', 'REST API', 'Payment Gateway'],
                'url' => '#',
                'status' => 'published',
                'order' => 1
            ],
            [
                'title' => 'Ges Property',
                'type' => 'Web Application',
                'description' => 'Property booking & transaction system including an admin dashboard. Developed as a freelance project.',
                'thumbnail' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=2673&auto=format&fit=crop',
                'tags' => ['PHP', 'Laravel', 'MySQL'],
                'url' => '#',
                'status' => 'published',
                'order' => 2
            ],
            [
                'title' => 'Mepay & Forkom',
                'type' => 'PPOB Services',
                'description' => 'PPOB admin system with payment API integration and role-based access control.',
                'thumbnail' => 'https://images.unsplash.com/photo-1556742049-0cfed4f7a07d?q=80&w=2670&auto=format&fit=crop',
                'tags' => ['Laravel', 'REST API', 'Payment Gateway'],
                'url' => '#',
                'status' => 'published',
                'order' => 3
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['title' => $project['title']],
                $project
            );
        }
    }
}
