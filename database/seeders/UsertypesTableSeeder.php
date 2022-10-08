<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Usertype;

class UsertypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = Usertype::all()->toarray();
        if(!empty($table))
        {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
            DB::table('usertypes')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        }
        $usertypes = [

            ['id' => 1,  
             'type' =>  'Administrador', 
             'created_at' => '2022-06-04 23:31:08', 
             'updated_at' => '2022-06-04 23:31:08'],

			['id' => 2,  
			 'type' =>  'Estandar', 
			 'created_at' => '2022-06-04 23:31:08', 
			 'updated_at' => '2022-06-04 23:31:08']
		];

        for ($i=0; $i<count($usertypes); $i++)
        {
        	Usertype::create($usertypes[$i]);
        }
    }
}
