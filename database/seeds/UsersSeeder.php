<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            [
                'id' => '1',
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => '$2y$10$J8W95c4bBTsqYwl2680R3.iFlvfjO0s/LbTlx323HRW1.pAEOSNBu',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('users')->insert(
            $users
        );
    }
}
