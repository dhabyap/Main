<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\TechStack;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Settings
        $settings = [
            'hero_title' => ['Logic & Laravel.', 'text'],
            'hero_role' => ['WEB DEVELOPER // FULL-STACK', 'text'],
            'hero_description' => ['Web Developer specializing in resilient backend architecture and dynamic frontend interfaces. Expert in PHP (Laravel, CodeIgniter) and modern JavaScript (React, Next.js).', 'textarea'],
            'hero_image' => ['https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop', 'image'],
            'hero_current_work' => ['PT. ME TECH', 'text'],

            'about_name' => ['Dhaby Anggika PUTRA.', 'text'],
            'about_id_tag' => ['DHABY_ANGGIKA // WEB DEV', 'text'],
            'about_description' => ['I am a Web Developer with over 3 years of experience. I build web applications using PHP (CodeIgniter, Laravel) and JavaScript (React.js, Next.js).', 'textarea'],
            'about_image' => ['https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1887&auto=format&fit=crop', 'image'],
            'experience_years' => ['3+ YEARS', 'text'],
            'education' => ['STMIK BANDUNG', 'text'],
            'location' => ['BANDUNG, ID', 'text'],
        ];

        foreach ($settings as $key => $data) {
            Setting::create([
                'key' => $key,
                'value' => $data[0],
                'type' => $data[1]
            ]);
        }

        // Tech Stacks
        $techs = [
            ['Laravel', 'logos:laravel'],
            ['CodeIgniter', 'logos:codeigniter-icon'],
            ['PHP', 'logos:php'],
            ['React.js', 'logos:react'],
            ['Next.js', 'logos:nextjs-icon'],
            ['MySQL', 'logos:mysql'],
            ['Node.js', 'logos:nodejs-icon'],
        ];

        foreach ($techs as $index => $tech) {
            TechStack::create([
                'name' => $tech[0],
                'icon' => $tech[1],
                'order' => $index
            ]);
        }

        // Services (Philosophy)
        $services = [
            [
                'title' => 'Back End.',
                'description' => 'Experienced in developing REST APIs using Laravel and CodeIgniter. Focus on authentication, RBAC, and data validation.',
                'icon' => 'rest-api',
                'order' => 1
            ],
            [
                'title' => 'Front End',
                'description' => 'Building responsive web applications and admin dashboards using React.js and Next.js. Seamless integration with backend services.',
                'icon' => 'solar:layers-minimalistic-linear',
                'order' => 2
            ],
            [
                'title' => 'Database',
                'description' => 'MySQL optimization. Handling large transaction tables, improving query performance, and generating reporting features.',
                'icon' => 'solar:database-linear',
                'order' => 3
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Skills (Capabilities)
        $skills = [
            ['Backend Development', 1],
            ['Frontend Engineering', 2],
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'title' => $skill[0],
                'order' => $skill[1]
            ]);
        }
    }
}
