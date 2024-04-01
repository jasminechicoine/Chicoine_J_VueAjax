<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MountainController extends Controller
{
    private $mountains = [
        [
            'id' => 1,
            'name' => 'Mount Everest',
            'description' => 'Mount Everest is Earth\'s highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Everest_kalapatthar.jpg/640px-Everest_kalapatthar.jpg'
        ],
        [
            'id' => 2,
            'name' => 'K2',
            'description' => 'K2, also known as Mount Godwin-Austen or Chhogori, at 8,611 metres (28,251 ft) above sea level, is the second highest mountain in the world, after Mount Everest.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/K2_2006b.jpg/640px-K2_2006b.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Kangchenjunga',
            'description' => 'Kangchenjunga is the third highest mountain in the world. It rises with an elevation of 8,586 m (28,169 ft) in a section of the Himalayas.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Kangchenjunga.jpg/640px-Kangchenjunga.jpg'
        ],
        [
            'id' => 4,
            'name' => 'Lhotse',
            'description' => 'Lhotse is the fourth highest mountain in the world at 8,516 metres (27,940 ft), after Mount Everest, K2, and Kangchenjunga.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/LhotseMountain.jpg/640px-LhotseMountain.jpg'
        ],

        [
            'id' => 5,
            'name' => 'Mount Kilimanjaro',
            'description' => 'Mount Kilimanjaro is the highest mountain in Africa and the highest single free-standing mountain in the world.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Mount_Kilimanjaro_01.jpg/640px-Mount_Kilimanjaro_01.jpg'
        ],
        [
            'id' => 6,
            'name' => 'Denali',
            'description' => 'Denali is the highest mountain peak in North America, with a summit elevation of 20,310 feet (6,190 m) above sea level.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Mount_McKinley_and_Denali_National_Park_1.jpg/640px-Mount_McKinley_and_Denali_National_Park_1.jpg'
        ],
        // Add more mountains as needed
    ];

    public function index()
    {
        return response()->json($this->mountains);
    }

    public function show($id)
    {
        $mountain = collect($this->mountains)->firstWhere('id', $id);
        if (!$mountain) {
            return response()->json(['error' => 'Mountain not found'], 404);
        }
        return response()->json($mountain);
    }
}