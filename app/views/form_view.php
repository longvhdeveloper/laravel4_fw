<?php
echo Form::open(array(
    'route' => array('route_user', '100'),
    'files' => true
));

echo Form::label('username', 'Username');
echo Form::text('username', '', array('size' => '30', 'class' => 'txt'));
echo '<br/>';
echo Form::label('password', 'Password');
echo Form::password('password', array('size' => '30', 'class' => 'txt'));

echo '<br/>';
echo Form::label('email', 'Email');
echo Form::email('email', '', array('size' => '30', 'class' => 'txt'));
echo '<br/>';
echo Form::label('note', 'Note');
echo Form::textarea('note', '', array('class' => 'note', 'rows' => '5', 'cols' => '25'));

echo Form::hidden('security', 'adadfasdfas');
echo '<br/>';
echo Form::label('avatar', 'Avatar');
echo Form::file('file');

echo '<br/>';

echo Form::label('gender','Gender');
echo Form::radio('gender', 'M', true) . 'Male ' . Form::radio('gender', 'F') . 'Female <br/>';

echo Form::label('country', 'Country');
echo Form::select('country', array(
    '1' => 'Viet nam',
    '2' => 'Singapore',
    '3' => 'Thailand'
),'2') . '<br/>';

echo Form::label('study', 'Study');
echo Form::checkbox('study', 'php', true);
echo Form::checkbox('study', 'ASP.NET') . '<br/>';

echo Form::address('123 nguyen dinh chieu') . '<br/>';

echo Form::submit('Submit');
echo Form::reset('Reset');
echo Form::button('OK');
echo Form::close();