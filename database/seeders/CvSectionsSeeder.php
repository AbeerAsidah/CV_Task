<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CvSection;

class CvSectionsSeeder extends Seeder
{
    public function run()
    {
        CvSection::create(['type' => 'personal', 'title' => 'Name', 'description' => 'John Doe']);
        CvSection::create(['type' => 'personal', 'title' => 'Contact', 'description' => 'Email: john.doe@example.com | Phone: (123) 456-7890']);
        CvSection::create(['type' => 'personal', 'title' => 'Address', 'description' => '1234 Elm Street, Springfield, IL 62704']);
        CvSection::create(['type' => 'education', 'title' => 'Bachelor of Science in Computer Science', 'description' => 'University of Illinois at Urbana-Champaign, 2015-2019']);
        CvSection::create(['type' => 'experience', 'title' => 'Software Engineer', 'description' => 'ABC Tech Company, 2019-Present']);
        CvSection::create(['type' => 'skills', 'title' => 'Programming Languages', 'description' => 'Java, Python, JavaScript, C++']);
        CvSection::create(['type' => 'skills', 'title' => 'Web Development', 'description' => 'HTML, CSS, JavaScript, Laravel, React']);
        CvSection::create(['type' => 'projects', 'title' => 'Personal Portfolio Website', 'description' => 'Developed a personal portfolio website using HTML, CSS, and JavaScript to showcase my projects and skills.']);
        CvSection::create(['type' => 'certificates', 'title' => 'Certified Java Programmer', 'description' => 'Oracle, 2020']);
    }
}

