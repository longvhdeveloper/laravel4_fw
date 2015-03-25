<?php
class NumberFilter
{
    public function filter($route, $request, $param)
    {
        if (!is_numeric($param)) {
            return 'Error';
        }
    }
}