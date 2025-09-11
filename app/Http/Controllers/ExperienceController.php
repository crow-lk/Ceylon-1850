<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        // Pass dynamic content to the view
        $data = [
            'pageTitle' => 'Experiences - Ceylon 1850',
            'pageDescription' => 'Discover immersive experiences at Ceylon 1850',
            'pageType' => 'experiences',
            'heroSubtitle' => 'Ceylon 1850',
            'heroTitle' => 'Experiences',
            'footerAbout' => 'Ceylon 1850 brings Sri Lanka\'s living heritage to life in Udawalawe. Experience authentic village life with local hosts.',
            'footerEmail' => 'ceylon1850@gmail.com',
            'customCSS' => 'packages.css',
            'customScript' => 'packages.js',
            'experiences' => Experience::all()
        ];

        return view('experiences', $data);
    }
}
