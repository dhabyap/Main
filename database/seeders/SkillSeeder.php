<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['Backend Development', 1],
            ['Frontend Engineering', 2],
            ['Database Management', 3],
            ['REST API Development', 4],
            ['Tooling (Git, Postman)', 5],
        ];

        foreach ($skills as $index => $skill) {
            Skill::updateOrCreate(
                ['title' => $skill[0]],
                ['order' => $skill[1]]
            );
        }
    }
}
