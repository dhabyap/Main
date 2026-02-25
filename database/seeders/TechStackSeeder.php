<?php

namespace Database\Seeders;

use App\Models\TechStack;
use Illuminate\Database\Seeder;

class TechStackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $techs = [
            ['Laravel', 'logos:laravel'],
            ['CodeIgniter', 'logos:codeigniter-icon'],
            ['PHP', 'logos:php'],
            ['React.js', 'logos:react'],
            ['Next.js', 'logos:nextjs-icon'],
            ['MySQL', 'logos:mysql'],
            ['Git', 'logos:git-icon'],
            ['Node.js', 'logos:nodejs-icon'],
        ];

        foreach ($techs as $index => $tech) {
            TechStack::updateOrCreate(
                ['name' => $tech[0]],
                ['icon' => $tech[1], 'order' => $index]
            );
        }
    }
}
