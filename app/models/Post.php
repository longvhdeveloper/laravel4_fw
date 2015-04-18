<?php
class Post extends Eloquent
{
	protected $table = 'posts';
	public $timestamps = false;
	
	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
}