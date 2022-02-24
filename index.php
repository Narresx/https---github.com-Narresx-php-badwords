<?php
$string = "    Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit.
Culpa unde recusandae quo. Lorem Aliquid vitae voluptatum,
id temporibus ipsum cumque consequuntur hic ipsum omnis unde veniam odit veritatis tempora itaque,
rerum autem ipsum eius.";

$bad_word = $_GET ? $_GET['bad_word'] : '';  // controllo se esiste GET

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
    <form action="index.php" method="GET">
        <input type="text" placeholder="Scrivi una parola" name="bad_word">
        <button type="submit">Invia</button>
    </form>

    <div> Il tuo nuovo testo originale è
        <p> <?php echo $string ?></p>
    </div>

    <div> La tua parola è <?php echo $bad_word ?></div>

    <div> Il tuo nuovo testo è
        <p> <?php echo $result ?></p>
    </div>
</body>

</html>