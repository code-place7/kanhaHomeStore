<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $products = [
    [
        'name' => 'Classic Wooden Chair',
        'slug' => 'classic-wooden-chair',
        'description' => 'Timeless wooden chair crafted from solid oak for durability and style.',
        'price' => 2999.00,
        'image' => 'https://cdn.pixabay.com/photo/2017/02/19/14/39/antique-2079936_1280.jpg',
        'category' => 'Chairs',
    ],
    [
        'name' => 'Modern Glass Coffee Table',
        'slug' => 'modern-glass-coffee-table',
        'description' => 'Elegant glass-top coffee table with sleek stainless steel legs.',
        'price' => 3999.99,
        'image' => 'https://cdn.pixabay.com/photo/2024/05/18/16/47/ai-generated-8770639_1280.png',
        'category' => 'Tables',
    ],
    [
        'name' => 'Luxury King Bed',
        'slug' => 'luxury-king-bed',
        'description' => 'Spacious king-size bed featuring a high headboard and plush upholstery.',
        'price' => 15999.00,
        'image' => 'https://cdn.pixabay.com/photo/2023/09/11/03/43/ai-generated-8245995_1280.jpg',
        'category' => 'Beds',
    ],
    [
        'name' => 'Oak Bookshelf with Drawers',
        'slug' => 'oak-bookshelf-drawers',
        'description' => 'Tall oak bookshelf combining open shelves and lower drawer storage.',
        'price' => 4999.00,
        'image' => 'https://cdn.pixabay.com/photo/2024/10/27/12/59/couch-9153405_1280.png',
        'category' => 'Storage',
    ],
    [
        'name' => 'Compact Study Desk',
        'slug' => 'compact-study-desk',
        'description' => 'Minimalist study desk, ideal for small rooms and focused work.',
        'price' => 2899.00,
        'image' => 'https://cdn.pixabay.com/photo/2021/07/09/09/37/desk-lamp-6398736_1280.jpg',
        'category' => 'Desks',
    ],
    [
        'name' => 'Ergonomic Leather Office Chair',
        'slug' => 'ergonomic-leather-office-chair',
        'description' => 'Office chair with padded leather seat, lumbar support, and wheels.',
        'price' => 6499.00,
        'image' => 'https://cdn.pixabay.com/photo/2024/11/28/17/49/ai-generated-9231235_1280.png',
        'category' => 'Chairs',
    ],
    [
        'name' => 'Foldable Dining Table',
        'slug' => 'foldable-dining-table',
        'description' => 'Space-saving foldable dining table suitable for cozy apartments.',
        'price' => 5599.00,
        'image' => 'https://cdn.pixabay.com/photo/2019/06/13/17/07/dinning-table-4272043_1280.jpg',
        'category' => 'Tables',
    ],
    [
        'name' => '3-Seater Fabric Sofa',
        'slug' => '3-seater-fabric-sofa',
        'description' => 'Comfortable three-seater sofa with soft fabric and firm cushions.',
        'price' => 13999.00,
        'image' => 'https://cdn.pixabay.com/photo/2024/07/25/09/23/interior-8920588_1280.jpg',
        'category' => 'Sofas',
    ],
    [
        'name' => 'Queen Size Bed with Storage',
        'slug' => 'queen-size-bed-storage',
        'description' => 'Queen bed featuring under-storage drawers and upholstered frame.',
        'price' => 11999.00,
        'image' => 'https://cdn.pixabay.com/photo/2020/02/17/08/10/wooden-bed-4855818_1280.jpg',
        'category' => 'Beds',
    ],
    [
        'name' => 'Wall-Mounted Wooden Shelf',
        'slug' => 'wall-mounted-wooden-shelf',
        'description' => 'Floating wood shelf ideal for decorations or books.',
        'price' => 1599.00,
        'image' => 'https://cdn.pixabay.com/photo/2023/10/04/11/01/wooden-shelf-8293451_1280.jpg',
        'category' => 'Storage',
    ],
    [
        'name' => ' Study Table Set',
        'slug' => 'study-table-set',
        'description' => 'Colorful kids’ study table with chair and storage compartments.',
        'price' => 2299.00,
        'image' => 'https://cdn.pixabay.com/photo/2024/01/24/09/55/ai-generated-8529227_1280.png',
        'category' => 'Desks',
    ],
    [
        'name' => 'Two-Door Wooden Wardrobe',
        'slug' => 'two-door-wooden-wardrobe',
        'description' => 'Classic wardrobe offering hanging and shelf space.',
        'price' => 8799.00,
        'image' => 'https://cdn.pixabay.com/photo/2020/01/11/23/54/closet-4758960_1280.png',
        'category' => 'Storage',
    ],
    [
        'name' => 'Premium Recliner Chair',
        'slug' => 'premium-recliner-chair',
        'description' => 'Adjustable recliner chair with plush cushioning.',
        'price' => 10999.00,
        'image' => 'https://cdn.pixabay.com/photo/2024/07/15/04/24/ai-generated-8895614_1280.jpg',
        'category' => 'Chairs',
    ],
   
    [
        'name' => 'L-Shaped Work Desk',
        'slug' => 'l-shaped-work-desk',
        'description' => 'Spacious L-shaped desk perfect for home offices.',
        'price' => 6999.00,
        'image' => 'https://cdn.pixabay.com/photo/2015/12/15/19/34/office-1094830_1280.jpg',
        'category' => 'Desks',
    ],
];


// ✅ INSERT into products table
        DB::table('products')->insert($products);

    }
}
