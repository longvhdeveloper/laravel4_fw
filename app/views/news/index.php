<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
      <title><?php echo $title; ?></title>
</head>

<body>
    <h1>Menu</h1>
<ul>
<?php
foreach ($menu as $item) {
    echo "<li>$item</li>";
}
?>
</ul>
<hr/>
<h1>List course</h1>
<ul>
<?php
foreach($data as $key => $item) {
    echo '<li><a href="'.URL::to('news/detail/'. $key).'">'.$item['title'].'</a></li>';
}
?>
</ul>
</body>

</html>
