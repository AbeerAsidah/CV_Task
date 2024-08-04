<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CvSection;
use App\Models\Profile; 
use App\Models\Experience; 
use App\Models\Education; 
use App\Models\Project; 
use App\Models\Language; 
use App\Models\Skill; 


class CvController extends Controller
{
    public function index()
    {
        $cvSections = CvSection::all();
        return view('cv.index', compact('cvSections'));
    }

    // public function home()
    // {
    //     // جلب بيانات من النماذج المطلوبة
    //     $profile = Profile::first(); // أو استخدم أي طريقة أخرى لجلب بيانات الملف الشخصي
    //     $experiences = Experience::all();
    //     $educations = Education::all();
    //     $projects = Project::all();
        
    //     // تمرير البيانات إلى العرض
    //     return view('home', compact('profile', 'experiences', 'educations', 'projects'));
    // }


    public function home()
    {
        $profile = Profile::first(); // أو استخدم أي طريقة أخرى لجلب بيانات الملف الشخصي
        $experiences = Experience::all();
        $educations = Education::all();
        $projects = Project::all();
        $skills = Skill::all();
        $languages = Language::all();

        
        // تمرير البيانات إلى العرض
        return view('cv.home', compact('profile', 'experiences', 'educations', 'projects'));
    }
    // public function home()
    // {
    //     return view('cv.home');
    // }

    public function profile()
    {
        $profile = Profile::first();
        return view('cv.profile', compact('profile'));
    }

    public function experience()
    {
        $experiences = Experience::all();
        return view('cv.experiences', compact('experiences'));
    }

    public function education()
    {
        $educations = Education::all();
        return view('cv.educations', compact('educations'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view('cv.projects', compact('projects'));
    }

    public function skills()
    {
        $skills = Skill::all();
        return view('cv.skills', compact('skills'));
    }

    public function languages()
    {
        $languages = Language::all();
        return view('cv.languages', compact('languages'));
    }
}