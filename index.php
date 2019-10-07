<?php
    $from = 1;
    if (isset($_POST['from'])) $from = $_POST['from'];
    $to = 100;
    if (isset($_POST['to'])) $to = $_POST['to'];
    $number = rand($from, $to);
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Randomizer</title
        style=""
    </head>
    <body>
        Your random number: <?php echo $number; ?>
        <form class="" method="post">
            From
            <input type="number" name="from" value=<?php echo $from; ?>>
            To
            <input type="text" name="to" value=<?php echo $to; ?>>
            <input type="submit">
        </form>
    </body>
</html>
