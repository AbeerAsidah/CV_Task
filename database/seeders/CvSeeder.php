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
            ],
            [
                'name' => 'Book4U',
                'description' => 'A user-friendly web application showcasing books by genre with features for search, download, and more.',
                'frontend' => 'HTML, CSS, JavaScript',
                'backend' => 'Laravel',
                'details' => 'Used MVC, Passport, MySQL server, logging, and Laravel resources.'

            ]
        ]);

        // إدراج بيانات الملف الشخصي
        DB::table('profiles')->insert([
            [
                'name' => 'Abeer Asidah',
                'role' => 'Backend Developer',
                'gender' => 'Female',
                'birthdate' => '2001-04-25', // استخدم تنسيق التاريخ الصحيح
                'nationality' => 'Syrian',
                'location' => 'Damascus/Syria',
                'phone' => '0997352356',
                'email' => 'abeerasidah@gmail.com',
                'social_links' => json_encode([
                    'facebook' => 'https://facebook.com/AbeerAsidah',
                    'linkedin' => 'https://linkedin.com/in/AbeerAsidah',
                    'twitter' => 'https://twitter.com/AbeerAsidah'
                ]), // تحويل المصفوفة إلى JSON
                'interests' => 'Learn Everything new in my field, Laravel, Software Engineering, Backend, API, Attending tech meetups, Technical writing, Knowledge Sharing, Tech Discovery'
            ]
        ]);
    }
}
