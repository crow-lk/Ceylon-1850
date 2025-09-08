<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Pass dynamic content to the view
        $data = [
            'pageTitle' => 'Ceylon 1850 - An Extraordinary Experience',
            'pageDescription' => 'Step into living heritage at Ceylon 1850 in Udawalawe — a hands-on village experience crafted by local families.',
            'pageType' => 'home',
            'heroSubtitle' => 'EXPERIENCE UDAWALAWE',
            'heroTitle' => 'Authentic Roots, Living Stories',
            // 'heroDescription' => 'Udawalawe is more than elephants and safaris. At Ceylon 1850, you step into a living story; a place where traditions are not performed, but practiced. Where the aroma of firewood cooking mingles with the sound of laughter in the village. Here, every path, every face, and every flavor carries the roots of Sri Lanka’s past, shared openly with you.',
            'introSubtitle' => 'Living Heritage',
            'introTitle' => 'Hands-on Village Experience',
            'introText1' => 'Step into living heritage at <strong>Ceylon 1850</strong> in Udawalawe — a hands-on village experience crafted by local families. From your cinnamon-tea welcome to the stories behind our crafts and cuisine, every moment is authentic, relaxed, and memorable.',
            'introText2' => 'Pan for gems, roll cinnamon sticks, weave with coconut leaves, try paddy-husking and winnowing, then harvest fresh vegetables to cook a garden-to-kitchen lunch. Finish with Sri Lankan sweets like <em>kokis</em> and <em>kavum</em>. Just 1.4 km south of the Elephant Orphanage, it\'s the perfect complement to your safari day.',
            'footerAbout' => '<strong>Ceylon 1850</strong> brings Sri Lanka\'s living heritage to life in Udawalawe. Spend a half or full day with local hosts—try gem mining, cinnamon stick making, coconut crafts, paddy-husking and traditional sweet making—then share a garden-to-kitchen meal. We keep groups small, respect the community and environment, and welcome families and travellers of all ages.',
            'footerEmail' => 'info@ceylon1850.com'
        ];

        return view('index', $data);
    }
}
