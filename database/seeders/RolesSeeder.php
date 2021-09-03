<?php

namespace Database\Seeders;

use App\Models\Roles as ModelsRoles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsRoles::insert([
		    [
		        'name' => 'ADM',

            ]
		]);
    }
}
