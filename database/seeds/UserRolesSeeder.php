<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            [
                'id' => 1,
                'name' => 'default',
            ],
            [
                'id' => 2,
                'name' => 'admin',
            ]
        ]);
    }
}
