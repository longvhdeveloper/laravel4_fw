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
                'body' => 'body First Post',
            	'user_id' => '1',
            ),
            array(
                'title' => 'Second post',
                'body' => 'body Second Post',
            	'user_id' => 2
            ),
			array (
				'title' => 'Third post',
				'body' => 'body Third Post',
				'user_id' => 1
			),
        	array(
        		'title' => 'Four post',
        		'body' => 'body Four Post',
        		'user_id' => 1
        	)
        );

        DB::table('posts')->insert($posts);
    }

}