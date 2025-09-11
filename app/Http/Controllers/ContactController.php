<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Pass dynamic content to the view
        $data = [
            'pageTitle' => 'Contact - Ceylon 1850',
            'pageDescription' => 'Get in touch with Ceylon 1850 for bookings, inquiries, and more information about our living heritage experience in Udawalawe.',
            'pageType' => 'contact',
            'heroSubtitle' => 'Ceylon 1850',
            'heroTitle' => 'Contact',
            'contactInfo' => 'Ceylon 1850 is a living-heritage experience in Udawalawe. Spend a relaxed half or full day with our local hosts—roll cinnamon, weave coconut leaves, try gem panning, and cook a garden-to-kitchen meal together. Just 1.4 km from the Elephant Orphanage, our small-group sessions are warm, safe, and hands-on—perfect for families, couples, and friends.',
            'contactAddress' => '1.4 km south of Udawalawe Elephant Orphanage, Udawalawe, Sri Lanka',
            'contactPhone' => '+94 76 424 6613',
            'contactEmail' => '',
            'footerAbout' => '<strong>Ceylon 1850</strong> brings Sri Lanka\'s living heritage to life in Udawalawe. Spend a half or full day with local hosts—try gem mining, cinnamon stick making, coconut crafts, paddy-husking and traditional sweet making—then share a garden-to-kitchen meal. We keep groups small, respect the community and environment, and welcome families and travellers of all ages.',
            'footerEmail' => 'ceylon1850@gmail.com'
        ];

        return view('contact', $data);
    }
}
