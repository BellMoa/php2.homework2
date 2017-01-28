<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php  foreach ($news as $news1):?>
<?php echo $news1['title'].'<br>'.$news1['text'].'<br>'?>
<?php endforeach;?>
</body>
</html>