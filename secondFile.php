<?php
$paragraph = $_GET ['paragraph'];
$word = $_GET ['word'];

$paragraph_lenght = strlen($paragraph);
$censored_paragraph = str_replace($word, '***',$paragraph);
$l_par_censored = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong><h3>Paragraph:</h3></strong>
    <?php echo $paragraph; ?>
    <p><strong>word:</strong></p>
    <h5><?php echo $word; ?></h5>
    <p><strong>lunghezza paragraph: </strong><?php echo $paragraph_lenght; ?></p>
    <p><strong>$censored paragraph: <?php echo $censored_paragraph; ?></strong></p>
    <p><strong> lenght censored paragraph:</strong> <? echo $l_par_censored; ?></p>
</body>
</html>