<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        // Pass dynamic content to the view
        $data = [
            'pageTitle' => 'Packages - Ceylon 1850',
            'pageDescription' => 'Discover our unique packages at Ceylon 1850 - Village Explorer, Family Day Out, and Heritage Workshop experiences in Udawalawe.',
            'pageType' => 'packages',
            'heroSubtitle' => 'Ceylon 1850',
            'heroTitle' => 'Packages',
            'sectionSubtitle' => 'Plan Your Visit',
            'sectionTitle' => 'Discover Our Packages',
            'packageText1' => 'Choose the experience that fits your day. <strong>Village Explorer (Half-Day)</strong> includes a traditional welcome, craft demos, and hands-on village-kitchen skills, followed by a garden-to-kitchen lunch. <strong>Family Day Out (Full-Day)</strong> adds sweet-making and extra time for photos and stories at a relaxed pace—perfect for families with kids. Both options are small-group, hosted by our local family in Udawalawe.',
            'packageText2' => 'Looking for something specific? <strong>Heritage Workshop (Custom)</strong> is tailored for schools, universities, and teams—focus on cooking, crafts, or cultural talks, with flexible timing. All packages include guided activities, ingredients, drinking water, and safety briefings. Start times: <strong>morning 9:00</strong> or <strong>afternoon 14:00</strong>. We\'re <strong>1.4 km</strong> from the Elephant Orphanage; pricing is available on request or via seasonal promotions.',
            'package1Title' => 'Village Explorer (Half-Day)',
            'package1Feature1' => 'Traditional welcome: village attire + cinnamon tea or king coconut',
            'package1Feature2' => 'Garden walk & harvest for cooking',
            'package1Feature3' => 'Village kitchen skills: paddy-husking, winnowing, millet grinding',
            'package1Feature4' => 'Clay-pot cooking session (hands-on)',
            'package1Feature5' => 'Coconut crafts: leaf weaving / husking (time-permitting)',
            'package1Feature6' => 'Sit-down garden-to-kitchen lunch',
            'package1Feature7' => 'Drinking water, host guidance, safety briefings',
            'package1Feature8' => 'Start times: 9:00–13:30 or 14:00–18:30',
            'package1ButtonText' => 'Book Now',
            'package2Title' => 'Family Day Out (Full-Day)',
            'package2Feature1' => 'Everything in Village Explorer (all activities)',
            'package2Feature2' => 'Gem panning — learn the swirl and spot stones',
            'package2Feature3' => 'Spice & herbal garden walk — aromas, uses, remedies',
            'package2Feature4' => 'Sweet making — kokis & kavum (tasting included)',
            'package2Feature5' => 'Extra time for photos & stories with hosts',
            'package2Feature6' => 'Optional tree-house visit / gentle coconut-tree climb',
            'package2Feature7' => 'Lunch included; afternoon tea or king coconut',
            'package2Feature8' => 'Ideal for families with kids; relaxed pace',
            'package2Feature9' => 'Start time: 9:00 (flexible)',
            'package2ButtonText' => 'Book Now',
            'package3Title' => 'Heritage Workshop (Custom)',
            'package3Feature1' => 'Tailored sessions for schools, universities, or teams',
            'package3Feature2' => 'Gem & geology: tools, safety, and panning practice',
            'package3Feature3' => 'Coconut & crafts: weaving, husking, zero-waste uses',
            'package3Feature4' => 'Spice botany: garden lab, grinding, and tasting',
            'package3Feature5' => 'Agriculture heritage: paddy, irrigation, seasonal rhythms',
            'package3Feature6' => 'Culture & storytelling or photo field session',
            'package3Feature7' => 'Includes materials, facilitators, water, and safety brief',
            'package3Feature8' => 'Duration 2–6 hours (or multi-session); start times by arrangement',
            'package3ButtonText' => 'Book Now',
            'footerAbout' => '<strong>Ceylon 1850</strong> brings Sri Lanka\'s living heritage to life in Udawalawe. Spend a half or full day with local hosts—try gem mining, cinnamon stick making, coconut crafts, paddy-husking and traditional sweet making—then share a garden-to-kitchen meal. We keep groups small, respect the community and environment, and welcome families and travellers of all ages.',
            'footerEmail' => 'info@ceylon1850.com'
        ];

        return view('packages', $data);
    }
}
