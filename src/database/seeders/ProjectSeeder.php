<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Water Gallon Inventory System',
            'description' => 'Laravel inventory management system for gallon stock and suppliers.',
            'tech_stack' => 'Laravel, Livewire, Filament, Mariadb',
            'github_link' => 'https://github.com/phymoyy-beep/project-2026',
            'status' => 'Development',
        ]);
    }
}
