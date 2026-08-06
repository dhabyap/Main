<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'title' => 'Analisa Saham IDX',
                'slug' => 'analisa-saham-idx',
                'type' => 'Full-Stack Analysis',
                'category' => 'professional',
                'thumbnail' => '/images/projects/analisa-saham.jpg',
                'tags' => ['FastAPI', 'Vue 3', 'MySQL', 'Telegram Bot'],
                'status' => 'published',
                'order' => 1,
                'description' => 'Platform analisis saham IDX, AI scoring, shareholder monitoring, dan real-time Telegram alerts.'
            ],
            [
                'title' => 'Kairos Whale Tracker',
                'slug' => 'kairos-tracker',
                'type' => 'Data Monitoring',
                'category' => 'professional',
                'thumbnail' => '/images/projects/kairos.jpg',
                'tags' => ['FastAPI', 'Vue 3', 'Neumorphism'],
                'status' => 'published',
                'order' => 2,
                'description' => 'Whale tracker dan sistem monitor cron job dengan visualisasi Neumorphism.'
            ],
            [
                'title' => 'Binance Alpha Tracker',
                'slug' => 'alpha-tracker',
                'type' => 'Crypto Analytics',
                'category' => 'personal',
                'thumbnail' => '/images/projects/alpha-tracker.jpg',
                'tags' => ['FastAPI', 'BSC', 'AI Advisor', 'Telegram Bot'],
                'status' => 'published',
                'order' => 3,
                'description' => 'Sistem deteksi dini koin BSC pre-trending dengan analisis AI dan scoring otomatis.'
            ],
            [
                'title' => 'GrowthRing',
                'slug' => 'growthring',
                'type' => 'Web App',
                'category' => 'personal',
                'thumbnail' => '/images/projects/growthring.jpg',
                'tags' => ['Next.js', 'Prisma', 'MariaDB', 'Framer Motion'],
                'status' => 'published',
                'order' => 4,
                'description' => 'Platform pelacak aktivitas komunitas di X dengan stack modern.'
            ],
            [
                'title' => 'MYSUZUKI',
                'slug' => 'mysuzuki',
                'type' => 'Full-Stack Development',
                'category' => 'professional',
                'thumbnail' => '/images/projects/mysuzuki.jpg',
                'tags' => ['Next.js', 'Laravel', 'REST API', 'Payment Gateway'],
                'status' => 'published',
                'order' => 5,
                'description' => 'Pengembangan full-stack untuk aplikasi web MYSUZUKI dengan Next.js dan Laravel.'
            ],
            [
                'title' => 'GES PROPERTY',
                'slug' => 'ges-property',
                'type' => 'Web Application',
                'category' => 'professional',
                'thumbnail' => '/images/projects/ges-property.jpg',
                'tags' => ['PHP', 'Laravel', 'MySQL'],
                'status' => 'published',
                'order' => 6,
                'description' => 'Aplikasi web manajemen properti GES PROPERTY menggunakan Laravel.'
            ],
            [
                'title' => 'HERMES AGENT: Automated Daily Tasks',
                'slug' => 'hermes-agent',
                'type' => 'Automation & DevOps',
                'category' => 'personal',
                'thumbnail' => '/images/projects/hermes-agent.jpg',
                'tags' => ['Hermes Agent', 'Cron Jobs', 'Automation', 'Python Scripting'],
                'status' => 'published',
                'order' => 7,
                'description' => 'Implementasi otomatisasi tugas harian dengan Hermes Agent dan Python scripting.'
            ],
            [
                'title' => 'MEPAY FORKOM',
                'slug' => 'mepay-forkom',
                'type' => 'PPOB Services',
                'category' => 'professional',
                'thumbnail' => '/images/projects/mepay-forkom.jpg',
                'tags' => ['Laravel', 'REST API', 'Payment Gateway'],
                'status' => 'published',
                'order' => 8,
                'description' => 'Platform layanan PPOB MEPAY FORKOM dengan integrasi API dan payment gateway.'
            ],
            [
                'title' => 'ZAKU AI CHATBOT',
                'slug' => 'zaku-ai',
                'type' => 'AI/ML Development',
                'category' => 'personal',
                'thumbnail' => '/images/projects/zaku-ai-chatbot.jpg',
                'tags' => ['Python', 'FastAPI', 'LLM', 'AI Assistant', 'NLP'],
                'status' => 'published',
                'order' => 9,
                'description' => 'Pengembangan chatbot AI canggih ZAKU dengan Python, FastAPI, dan model LLM.'
            ],
            [
                'title' => 'WEDDING INVITATION',
                'slug' => 'wedding-invitation',
                'type' => 'Frontend Development',
                'category' => 'personal',
                'thumbnail' => '/images/projects/wedding-invitation.jpg',
                'tags' => ['Vue.js', 'HTML', 'CSS', 'JavaScript'],
                'status' => 'published',
                'order' => 10,
                'description' => 'Pembuatan website undangan pernikahan dinamis dan personalisasi dengan Vue.js.'
            ],
            [
                'title' => 'LANDING PAGE SHOWCASE',
                'slug' => 'landing-page',
                'type' => 'Frontend Development',
                'category' => 'personal',
                'thumbnail' => '/images/projects/landing-page-showcase.jpg',
                'tags' => ['HTML5', 'CSS3', 'JavaScript', 'UI/UX'],
                'status' => 'published',
                'order' => 11,
                'description' => 'Showcase landing page yang dioptimalkan untuk konversi dengan teknologi frontend modern.'
            ]
        ];

        foreach ($projects as $p) {
            Project::updateOrCreate(['slug' => $p['slug']], $p);
        }
    }
}
