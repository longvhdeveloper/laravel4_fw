<?php

class QhonlineValidate
{
    public function qhonline($field, $value, $params)
    {
        if ($value == 'qhonline' && $params[0] % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }
} 