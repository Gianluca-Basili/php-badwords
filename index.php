<?php 
    $paragraph = $_POST['paragraph'];
    $word = $_POST['word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php echo $paragraph." ".$word; ?>
        <form action="/index.php" method="POST">
       
        <textarea name="paragraph" id="" cols="30" rows="10"></textarea>
        <input type="text" name="word">
        <input type="button" value="send">
        </form>
    </div>
</body>
</html>