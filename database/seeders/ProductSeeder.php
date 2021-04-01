<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB:: table('products')->insert([
        ['name'=>'IphoneX',
        'price'=>'450',
        'description'=>'Smartphone with 16gb ram and others good features',
        'category'=>'mobile',
        'gallery'=>'https://upload.wikimedia.org/wikipedia/commons/3/32/IPhone_X_vector.svg',
        ],
        ['name'=>'Lg mobile',
        'price'=>'300',
        'description'=>'Smartphone with 8gb ram and others good features',
        'category'=>'mobile',
        'gallery'=>'https://www.pngkey.com/png/detail/97-973421_mobile-png-lg-v20.png',
        ],
        ['name'=>'Tv',
        'price'=>'700',
        'description'=>'Tv 55 pouce, good for room',
        'category'=>'tv',
        'gallery'=>'http://www.pngall.com/wp-content/uploads/5/Full-HD-LED-TV-PNG-Download-Image.png',
        ],
        ['name'=>'refrigerator',
        'price'=>'500',
        'description'=>'Tv 55 pouce, good and resist',
        'category'=>'tv',
        'gallery'=>'http://www.pngall.com/wp-content/uploads/2016/05/Refrigerator-Free-PNG-Image.png',
        ],
        ['name'=>'IphoneX',
        'price'=>'450',
        'description'=>'Smartphone with 16gb ram and others good features',
        'category'=>'mobile',
        'gallery'=>'https://upload.wikimedia.org/wikipedia/commons/3/32/IPhone_X_vector.svg',
        ],
        ['name'=>'Lg mobile',
        'price'=>'300',
        'description'=>'Smartphone with 8gb ram and others good features',
        'category'=>'mobile',
        'gallery'=>'https://www.pngkey.com/png/detail/97-973421_mobile-png-lg-v20.png',
        ],
        ['name'=>'Tv',
        'price'=>'700',
        'description'=>'Tv 55 pouce, good for room',
        'category'=>'tv',
        'gallery'=>'http://www.pngall.com/wp-content/uploads/5/Full-HD-LED-TV-PNG-Download-Image.png',
        ],
        ['name'=>'refrigerator',
        'price'=>'500',
        'description'=>'good and resist',
        'category'=>'Refrigerator',
        'gallery'=>'http://www.pngall.com/wp-content/uploads/2016/05/Refrigerator-Free-PNG-Image.png',
        ],
        ['name'=>'IphoneX',
        'price'=>'450',
        'description'=>'Smartphone with 16gb ram and others good features',
        'category'=>'mobile',
        'gallery'=>'https://upload.wikimedia.org/wikipedia/commons/3/32/IPhone_X_vector.svg',
        ],
        ['name'=>'Lg mobile',
        'price'=>'300',
        'description'=>'Smartphone with 8gb ram and others good features',
        'category'=>'mobile',
        'gallery'=>'https://www.pngkey.com/png/detail/97-973421_mobile-png-lg-v20.png',
        ],
        ['name'=>'Tv',
        'price'=>'700',
        'description'=>'Tv 55 pouce, good for room',
        'category'=>'tv',
        'gallery'=>'http://www.pngall.com/wp-content/uploads/5/Full-HD-LED-TV-PNG-Download-Image.png',
        ],
        ['name'=>'refrigerator',
        'price'=>'500',
        'description'=>' good and resist',
        'category'=>'Refrigerator',
        'gallery'=>'http://www.pngall.com/wp-content/uploads/2016/05/Refrigerator-Free-PNG-Image.png',
        ],
]
        ) ;
        //
    }
}
