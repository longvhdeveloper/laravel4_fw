<?php
class Album extends Eloquent
{
    protected $table = 'albums';
    public $timestamps = false;

    public function songs()
    {
        return $this->belongsToMany('Song');
    }
}