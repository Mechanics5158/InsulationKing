<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $layers = [
            [
                'code' => 'roof',
                'title' => 'Roof Insulation',
                'summary' => 'Radiant barriers and rigid board systems installed under metal, tile, and concrete roofing to cut heat load before it ever reaches the ceiling.',
                'points' => [
                    'Aluminum foil & foam radiant barriers',
                    'Rigid board and blown-in systems for attics and metal decking',
                    'Rated for tropical heat and monsoon humidity',
                ],
            ],
            [
                'code' => 'exterior',
                'title' => 'Exterior Insulation',
                'summary' => 'A continuous thermal layer across walls and facades that stops heat transfer at the envelope, not inside the room.',
                'points' => [
                    'Continuous insulation boards for concrete and CHB walls',
                    'Thermal breaks at joints, corners, and penetrations',
                    'Compatible with plaster, cladding, and paint finishes',
                ],
            ],
            [
                'code' => 'waterproofing',
                'title' => 'Waterproofing',
                'summary' => 'Membrane and coating systems for roof decks, podiums, basements, and wet areas, engineered to move with the structure instead of cracking.',
                'points' => [
                    'Liquid-applied and sheet membrane systems',
                    'Podium deck, basement, and water tank waterproofing',
                    'Detailing at flashings, drains, and expansion joints',
                ],
            ],
            [
                'code' => 'coating',
                'title' => 'Nano-Tech Coatings',
                'summary' => 'Nanoceramic and hydrophobic topcoats that reflect heat, shed water, and resist dirt and algae on the finished surface.',
                'points' => [
                    'Nanoceramic heat-reflective roof and wall coatings',
                    'Hydrophobic, self-cleaning topcoats',
                    'UV-stable formulations for year-round sun exposure',
                ],
            ],
        ];

        $process = [
            [
                'title' => 'Site Inspection',
                'body' => 'We survey the roof, walls, and problem areas, check for existing leaks or heat gain, and take moisture readings before recommending a system.',
            ],
            [
                'title' => 'Surface Preparation',
                'body' => 'Cleaning, patching, and priming so every layer that follows bonds properly — most coating failures start with a surface that was never prepared.',
            ],
            [
                'title' => 'Application',
                'body' => 'Insulation, membranes, and coatings are installed in the sequence and thickness the spec calls for, with photo documentation at each stage.',
            ],
            [
                'title' => 'Cure & Inspection',
                'body' => 'We let each layer cure fully, then run a final walkthrough with you — including a water test where waterproofing is involved.',
            ],
        ];

        $stats = [
            ['value' => '15+', 'label' => 'Years in building envelope work'],
            ['value' => '300+', 'label' => 'Roofs and facades treated'],
            ['value' => '10-yr', 'label' => 'Workmanship warranty on core systems'],
        ];

        return view('home', compact('layers', 'process', 'stats'));
    }
}
