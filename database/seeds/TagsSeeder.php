<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();

        $tags = array(
            [
                'id' => 1,
                'name' => 'tech',
                'info' => 'Technology related',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'id' => '2',
                'name' => 'php',
                'info' => 'PHP',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'id' => 3,
                'name' => 'io',
                'info' => 'Finki',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('tags')->insert(
            $tags
        );
    }
}
