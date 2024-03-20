// $faker = Faker::create();
// $visiblePosts = 5;

// foreach(range(1,100) as $index){
//     $visible = $index <= $visiblePosts;
//     $index ++;

//     DB::table('products')->insert([
//         'category_id'   => rand(1, 5),
//         'name'          => $faker->name,
//         'description'   => $faker->text(),
//         'image'         => $faker->imageUrl(),
//         'ean_code'      => $this->generateEanCode(),
//         'price'         => $this->generatePrice(),
//         'evidence'      => $faker->boolean($visible),
//         'created_at'    => now(),
//         'updated_at'    => now(),
//     ]);
// }

// private function generateEanCode(){
//     return rand(1000000000000, 9999999999999);
// }

// private function generatePrice(){
//     return rand(1.00, 100.00);
// }