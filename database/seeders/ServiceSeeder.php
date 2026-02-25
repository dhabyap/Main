<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // The original ServiceSeeder already uses updateOrCreate correctly.
        // The provided "Code Edit" seems to be a mix of different seeders and is not syntactically correct
        // or directly applicable as a replacement for this specific seeder's run method.
        // Therefore, the original, correct implementation for ServiceSeeder is retained.

        $services = [
            [
                'title' => 'Back End Development',
                'description' => 'Developing MVC applications using Laravel and CodeIgniter. Building robust REST APIs and optimizing database queries for reporting.',
                'icon' => 'solar:code-square-linear',
                'order' => 1
            ],
            [
                'title' => 'Front End Engineering',
                'description' => 'Building dynamic and responsive user interfaces using React.js and Next.js. Seamlessly integrating with backend REST APIs.',
                'icon' => 'solar:layers-minimalistic-linear',
                'order' => 2
            ],
            [
                'title' => 'System Integration',
                'description' => 'Implementing payment gateways, role-based access control (RBAC), and third-party API services for comprehensive web solutions.',
                'icon' => 'solar:share-circle-linear',
                'order' => 3
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['title' => $service['title']],
                $service
            );
        }
    }
}
