<?php
/**
 * Created by PhpStorm.
 * User: longvo
 * Date: 4/17/15
 * Time: 8:32 PM
 */

class Songs extends Eloquent
{
    public $table = 'song';
    public $timestamps = false;

    public function getType()
    {
        $type = '';

        switch ($this->type) {
            case 1 :
                $type = 'Nhạc trẻ';
                break;
            case 2 :
                $type = 'Nhạc dân ca';
                break;
            case 3 :
                $type = 'Nhạc thiếu nhi';
                break;
        }

        return $type;
    }
} 