<?php

namespace Database\Seeders;

use App\Models\CarType;
use App\Models\Company;
use App\Models\Initial;
use App\Models\Location;
use App\Models\Track;
use App\Models\User;
use App\Models\Yard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fernando Leal',
            'email' => 'fernando.espinosa@kplogistics.com.mx',
            'password' => bcrypt('fercho92')
        ]);

              
        User::factory(98)->create();
        Initial::factory(10)->create();
        // $locations=Location::factory(10)->create();
        //$locations=['Aguascalientes', 'Baja California', 'Baja California Sur', 'Campeche', 'Chiapas', 'Chihuahua', 'Coahuila', 'Colima', 'Distrito Federal', 'Durango', 'Guanajuato', 'Guerrero', 'Hidalgo', 'Jalisco', 'México', 'Michoacán', 'Morelos', 'Nayarit', 'Nuevo León', 'Oaxaca', 'Puebla', 'Querétaro', 'Quintana Roo', 'San Luis Potosí', 'Sinaloa', 'Sonora', 'Tabasco', 'Tamaulipas', 'Tlaxcala', 'Veracruz', 'Yucatán', 'Zacatecas'];
        $locations=['Veracruz','Hermosillo','Hidalgo','Coahuila'];
        foreach ($locations as $location) {
            Location::create([
                'name' => $location,
            ]); 
        }
        $locations=Location::all();
        $companies=Company::factory(8)->create();
        foreach ($locations as $location) {
            Yard::factory(1)->create([
                'company_id'=>$companies[rand(1,count($companies)-1)]->id,
                'location_id'=>$location->id
            ]);
        }
        $yards=Yard::all();
        foreach ($yards as $yard) {
            $yard->users()->attach(User::all()->random()->id);
            Track::factory(3)->create([
                'yard_id'=>$yard->id
            ]);
        }
        foreach ($companies as $company) {
            $company->users()->attach(User::all()->random()->id);
        }

        $CarTypes=['A','B','C'];
        foreach ($CarTypes as $CarType) {
            /* CarType::create([
                'name' => $CarType,
            ]); */
            CarType::factory(1)->create([
                'name' => $CarType,
            ]);
        }
        

        
    }
}