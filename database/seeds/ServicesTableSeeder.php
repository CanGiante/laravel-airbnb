<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $servicesArray = ['wifi','posto macchina','piscina','portineria','sauna','vista mare'];

      //services loop
      for ($i=0; $i < count($servicesArray) ; $i++) {

          $new_service = new Service();
          $new_service->name = $servicesArray[$i];
          $new_service->save();

      }
    }

}
