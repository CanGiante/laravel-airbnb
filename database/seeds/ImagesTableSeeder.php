<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      //50 apartments loop
      for ($i=0; $i < 50 ; $i++) {
        //2 images loop
        for ($j=0; $j < 2 ; $j++) {
          
            $new_image = new Image();
            $new_image->apartment_id = $i + 1;
            $new_image->img_path = $faker->imageUrl($width = 320, $height = 240, 'city');
            $new_image->save();
            
        }
      }
    }
}
