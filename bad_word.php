<?php
$string = "    Lorem ipsum dolor sit amet consectetur adipisicing elit.
Culpa unde recusandae quo. Lorem Aliquid vitae voluptatum,
id temporibus cumque consequuntur hic omnis unde veniam odit veritatis tempora itaque,
rerum autem eius.";

$bad_word = $_GET['bad_word'];

$trimmed_string = trim($string);

$result = str_replace($bad_word, '***', $trimmed_string);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <div> La tua parola è <?php echo $bad_word ?></div>

    <div> Il tuo nuovo testo è
        <p> <?php echo $result ?></p>
    </div>
</body>

</html>