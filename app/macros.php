<?php
Form::macro('address', function($name){
    return '<label>Address</label><input value="'.$name.'" type="text" size="25" />';
});