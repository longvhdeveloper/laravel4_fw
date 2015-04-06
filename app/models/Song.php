<?php
class Song extends Eloquent
{
    protected $table = 'songs';
    public $timestamps = false;

    public function albums()
    {
        return $this->belongsToMany('Album');
    }
}