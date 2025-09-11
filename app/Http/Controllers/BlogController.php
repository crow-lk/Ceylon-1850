<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Pass dynamic content to the view
        $data = [
            'pageTitle' => 'Blog - Ceylon 1850',
            'pageDescription' => 'Read our latest blog posts about Ceylon 1850 experiences, Sri Lankan culture, and living heritage in Udawalawe.',
            'pageType' => 'blog',
            'heroSubtitle' => 'Ceylon 1850',
            'heroTitle' => 'Our Blog',
            'loadMoreText' => 'Load More',
            'footerAbout' => '<strong>Ceylon 1850</strong> brings Sri Lanka\'s living heritage to life in Udawalawe. Spend a half or full day with local hosts—try gem mining, cinnamon stick making, coconut crafts, paddy-husking and traditional sweet making—then share a garden-to-kitchen meal. We keep groups small, respect the community and environment, and welcome families and travellers of all ages.',
            'footerEmail' => 'ceylon1850@gmail.com'
        ];

        return view('blog', $data);
    }
}
