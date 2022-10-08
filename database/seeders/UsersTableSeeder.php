<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = User::all()->toarray();
        if(!empty($table))
        {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
            DB::table('users')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        }
        $users = [

            ['id' => 1,  
             'name' =>  'ADMIN', 
             'username' =>  'admin', 
             'email' =>  'admin@admin.com', 
             'password' =>  '$2y$10$oyaH36bPd9rfbywnPi6PJuC4GRsHaf6voJ9FrLDQhN5tO2DeywgTG', //123456789
             'usertype_id' =>  1, 
             'created_at' => '2022-10-04 23:31:08', 
             'updated_at' => '2022-10-04 23:31:08']

		];

        for ($i=0; $i<count($users); $i++)
        {
        	User::create($users[$i]);
        }
    }
}
