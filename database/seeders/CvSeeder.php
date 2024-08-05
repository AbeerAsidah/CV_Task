<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvSeeder extends Seeder
{
    public function run()
    {
        // إدراج بيانات لغات
        DB::table('languages')->insert([
            ['language' => 'Arabic'],
            ['language' => 'English']
        ]);

        // إدراج بيانات المهارات
        DB::table('skills')->insert([
            ['skill' => 'Skilled in: Laravel framework and PHP Language'],
            ['skill' => 'Experience with Git'],
            ['skill' => 'Great knowledge of RESTful APIs'],
            ['skill' => 'Great knowledge of software design diagrams'],
            ['skill' => 'Experience in project management tools (Jira..)'],
            ['skill' => 'Clean Architecture using MVC or MVVM'],
            ['skill' => 'Experience in working with MySQL databases'],
            ['skill' => 'Skilled in: researching, selecting, and implementing Laravel extensions to meet project requirements'],
            ['skill' => 'Experience in: HTML, CSS, and JavaScript'],
            ['skill' => 'API Design | Data Analysis'],
            ['skill' => 'MultiTask (Ability to multitask and perform under tight deadlines)'],
            ['skill' => 'Great Time Management Skill'],
            ['skill' => 'Strong ability to work effectively as part of a team'],
            ['skill' => 'Patient | Self & Fast Learning'],
            ['skill' => 'Problem Solving']
        ]);

        // إدراج بيانات التعليم
        DB::table('educations')->insert([
            [
                'degree' => 'Information Technology Engineering',
                'field' => 'Software Engineering',
                'institution' => 'Damascus University',
                'start_date' => '09/2019',
                'end_date' => 'present',
                'location' => 'Damascus, Syria'
            ]
        ]);

        // إدراج بيانات الخبرات المهنية
        DB::table('experiences')->insert([
            [
                'title' => 'Volunteering at Link Team',
                'organization' => 'Uni-Link Project',
                'role' => 'Information Technology Student',
                'start_date' => '2023',
                'end_date' => 'present',
                'location' => 'Damascus, Syria'
            ]
        ]);

        // إدراج بيانات المشاريع
        DB::table('projects')->insert([
            [
                'name' => 'Uni_Help',
                'description' => 'A mobile application designed to assist students and professors with various university-related services. A web dashboard for staff to automate data services and manage content within the app.',
                'frontend' => 'Flutter',
                'backend' => 'Laravel',
                'details' => 'Used Laravel resources, Passport for security, MVC pattern, MySQL, Excel library from Maatwebsite.'
            ],
            [
                'name' => 'Safe Source',
                'description' => 'A web-based file management system designed to facilitate collaborative file handling while preventing concurrent edits. Users can upload files, categorize them, and manage access.',
                'frontend' => 'Flutter Web',
                'backend' => 'Laravel',
                'details' => 'Utilized AOP, logging, ACID compliance, atomic file locking, ORM, and transaction management.'
            ],
            [
                'name' => 'Sanad Charity',
                'description' => 'A mobile application dedicated to serving as a charitable organization for students, providing job opportunities, study spaces, and more.',
                'frontend' => 'Flutter',
                'backend' => 'Laravel',
                'details' => 'Used MVC, Passport, MySQL server, logging, and Laravel resources.'

            ],
            [
                'name' => 'Product Store App',
                'description' => 'A web application for selling products, designed to display and manage products, including search and comments.',
                'frontend' => 'Flutter',
                'backend' => 'Laravel',
                'details' => 'Used MVC, Passport, MySQL server, logging, and Laravel resources.'
            ]
        ]);

         // إدراج بيانات الاهتمامات
         DB::table('interests')->insert([
            ['name' => 'Learning New Technologies', 'description' => 'Learn Everything new in my field'],
            ['name' => 'Frameworks and Technologies', 'description' => 'Laravel, Software Engineering, Backend, API..'],
            ['name' => 'Networking', 'description' => 'Attending tech meetups'],
            ['name' => 'Technical Writing', 'description' => 'Writing articles and guides'],
            ['name' => 'Knowledge Sharing', 'description' => 'Sharing insights with peers'],
            ['name' => 'Tech Discovery', 'description' => 'Exploring new technology trends']
        ]);

        // إدراج بيانات الملف الشخصي
        DB::table('profiles')->insert([
            [
                'name' => 'Abeer Asidah',
                'role' => 'Backend Developer | Software Engineer',
                'gender' => 'Female',
                'birthdate' => '2001-04-25', 
                'nationality' => 'Syrian',
                'location' => 'Damascus/Syria',
                'phone' => '0997352356',
                'email' => 'abeerasidah@gmail.com',
                'social_links' => json_encode([
                    'facebook' => 'https://facebook.com/AbeerAsidah',
                    'linkedin' => 'https://www.linkedin.com/in/abeer-asidah-9719a221b/',
                    'twitter' => 'https://twitter.com/AbeerAsidah'
                ]), 
                'interests' => 'I am a highly skilled Software Engineer and Backend
                                Developer with a passion for crafting exceptional APIs that
                                drive modern web and mobile applications. My expertise liesin
                                architecting robust and scalable backend systems, particularly
                                focused on API design and development.'
            ]
        ]);
    }
}
