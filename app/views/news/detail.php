<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Detail</title>
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
<h1>Course Detail</h1>
<b>Course name : </b> <?php echo $data['title']; ?><br/>
<b>Course price : </b><?php echo $data['price']; ?>
</body>
</html>