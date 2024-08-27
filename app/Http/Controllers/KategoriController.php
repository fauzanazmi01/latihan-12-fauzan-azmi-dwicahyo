<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = [
            [
                'id' => 1,
                'name' => 'Samsung',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 4,
                        'name' => 'Samsung Galaxy S21',
                        'category_id' => 1,
                        'price' => 12000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 7,
                        'name' => 'Samsung Galaxy Note 20',
                        'category_id' => 1,
                        'price' => 8000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 10,
                        'name' => 'Samsung Galaxy A52',
                        'category_id' => 1,
                        'price' => 3000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                ]
            ],
            [
                'id' => 2,
                'name' => 'Apple',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 1,
                        'name' => 'iPhone 12',
                        'category_id' => 1,
                        'price' => 8000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 2,
                        'name' => 'MacBook Pro',
                        'category_id' => 2,
                        'price' => 25000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 8,
                        'name' => 'iPhone SE',
                        'category_id' => 2,
                        'price' => 5000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 17,
                        'name' => 'iPhone XR',
                        'category_id' => 2,
                        'price' => 6000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 20,
                        'name' => 'iPad Mini',
                        'category_id' => 2,
                        'price' => 8000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                ]
            ],
            [
                'id' => 3,
                'name' => 'Huawei',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 3,
                        'name' => 'Huawei P40',
                        'category_id' => 3,
                        'price' => 8000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 6,
                        'name' => 'Huawei MateBook X Pro',
                        'category_id' => 3,
                        'price' => 18000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 9,
                        'name' => 'Huawei P30',
                        'category_id' => 3,
                        'price' => 6000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],

                ]
            ],
            [
                'id' => 4,
                'name' => 'Microsoft',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 12,
                        'name' => 'Microsoft Surface Pro',
                        'category_id' => 3,
                        'price' => 19000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                ]
            ],
            [
                'id' => 5,
                'name' => 'Google',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 15,
                        'name' => 'Google Pixel 9 Pro',
                        'category_id' => 3,
                        'price' => 10000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                ]
            ],
            [
                'id' => 6,
                'name' => 'Amazon',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 18,
                        'name' => 'Amazon Kindle Fire',
                        'category_id' => 3,
                        'price' => 2000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                ]
            ],
            [
                'id' => 7,
                'name' => 'Facebook',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 18,
                        'name' => 'Meta Quest 2',
                        'category_id' => 3,
                        'price' => 4000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                ]
            ],
            [
                'id' => 8,
                'name' => 'Xiaomi',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 18,
                        'name' => 'Poco X30',
                        'category_id' => 3,
                        'price' => 2000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                ]
            ],
            [
                'id' => 9,
                'name' => 'Steam',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 18,
                        'name' => 'Steam Deck OLED',
                        'category_id' => 3,
                        'price' => 7000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 18,
                        'name' => 'Steam Deck',
                        'category_id' => 3,
                        'price' => 5000000,
                        'discount' => rand(0, 95) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                ]
            ],
            [
                'id' => 10,
                'name' => 'Spotify',
                'created_at' => now(),
                'updated_at' => now(),
                'items' => [
                    [
                        'id' => 18,
                        'name' => 'Spotify Car Thing',
                        'category_id' => 3,
                        'price' => 2000000,
                        'discount' => rand(0, 75) / 100, // Add discount field with random value between 0 and 0.75
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                ]
            ]
        ];

        return view('admin.kategori', compact('kategori'));
    }
}
