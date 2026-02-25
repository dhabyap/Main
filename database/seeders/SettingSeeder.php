<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Personal Info
            'hero_title' => ['Logic & Laravel.', 'text'],
            'hero_role' => ['Web Developer // Full-Stack', 'text'],
            'hero_description' => ['Web Developer with more than 3 years of experience in back-end and front-end development. Specialized in PHP (Laravel, CodeIgniter), JavaScript, and REST APIs.', 'textarea'],
            'hero_image' => ['https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop', 'image'],
            'hero_current_work' => ['PT. Milenial Elite Teknologi', 'text'],

            'about_name' => ['Dhaby Anggika Putra.', 'text'],
            'about_id_tag' => ['DHABY_ANGGIKA // WEB DEV', 'text'],
            'about_description' => ['Web Developer with over 3 years of experience building scalable web applications. Expert in PHP and JavaScript frameworks.', 'textarea'],
            'about_image' => ['https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1887&auto=format&fit=crop', 'image'],

            // Stats & Meta
            'experience_years' => ['3+ YEARS', 'text'],
            'education' => ['STMIK Bandung (Informatics Engineering)', 'text'],
            'location' => ['Bandung, Jawa Barat', 'text'],
            'phone' => ['+62 896-5638-0397', 'text'],
            'email' => ['dhabyap@gmail.com', 'text'],
            'linkedin' => ['https://www.linkedin.com/in/dhaby-anggika-putra-74371b225/', 'text'],
        ];

        foreach ($settings as $key => $data) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $data[0], 'type' => $data[1]]
            );
        }
    }
}
