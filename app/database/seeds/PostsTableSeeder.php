<?php

class PostsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = array(
            array(
                'title' => 'First post',
                'body' => 'body First Post'
            ),
            array(
                'title' => 'Second post',
                'body' => 'body Second Post'
            )
        );

        DB::table('posts')->insert($posts);
    }

}