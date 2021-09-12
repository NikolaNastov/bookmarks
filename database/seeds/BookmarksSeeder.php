<?php

use Illuminate\Database\Seeder;

class BookmarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmarks')->delete();

        $bm = array(
            [
                'id' => 1,
                'url' => 'https://phptherightway.com/',
                'comment' => 'Learn php the right way',
                'user_id' => 1,
                'tag_id' => 2,
                'public' => true,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'id' => 2,
                'url' => 'https://finki.ukim.mk/',
                'comment' => 'fax',
                'user_id' => 1,
                'tag_id' => 3,
                'public' => true,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'id' => 3,
                'url' => 'http://news.ycombinator.com',
                'comment' => 'tech news',
                'user_id' => 1,
                'tag_id' => 1,
                'public' => false,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'id' => 4,
                'url' => 'https://www.jetbrains.com/phpstorm/',
                'comment' => 'php IDE',
                'user_id' => 1,
                'tag_id' => 2,
                'public' => false,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('bookmarks')->insert(
            $bm
        );
    }
}
