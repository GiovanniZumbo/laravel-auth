<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'title' => "Discord Homepage",
                'description' => "",
                'image_url' => "",
                'git_url' => "",
            ],
            [
                'title' => "SpotifyWeb",
                'description' => "",
                'image_url' => "",
                'git_url' => "",
            ],
            [
                'title' => "Boolzapp",
                'description' => "",
                'image_url' => "",
                'git_url' => "",
            ],
            [
                'title' => "Yu-Gi-Oh database",
                'description' => "",
                'image_url' => "",
                'git_url' => "",
            ],
        ];

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project["title"];
            $newProject->description = $project["description"];
            $newProject->image_url = $project["image_url"];
            $newProject->git_url = $project["git_url"];
            $newProject->save();
        }
    }
}
