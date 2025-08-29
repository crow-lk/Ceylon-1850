<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementsController extends Controller
{
    public function index()
    {
        // Pass dynamic content to the view
        $data = [
            'pageTitle' => 'Elements - Ceylon 1850',
            'pageDescription' => 'Explore UI elements and components at Ceylon 1850',
            'pageType' => 'elements',
            'heroSubtitle' => 'Ceylon 1850',
            'heroTitle' => 'Elements',
            'footerAbout' => 'Ceylon 1850 brings Sri Lanka\'s living heritage to life in Udawalawe. Experience authentic village life with local hosts.',
            'footerEmail' => 'info@ceylon1850.com',
            'customCSS' => 'elements.css',
            'customScript' => 'elements.js'
        ];

        return view('elements', $data);
    }
}
