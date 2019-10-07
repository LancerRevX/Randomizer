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
        <title>Randomizer</title>
        <style>
            body
            {
                background-color: white;
                color: blue;
                font-family: arial;
                font-size: 16px;
                font-variant: small-caps;
                font-weight: bold;
            }

            form
            {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            form *
            {
                margin-bottom: 8px;
            }

            form div
            {
                text-align: right;
                margin-bottom: 0;
            }

            button
            {
                color: red;
                font: inherit;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <p>Your random number: <?php echo $number; ?></p>
            <div>
                <span>From</span>
                <input type="number" name="from" value=<?php echo $from; ?>>
                <br>
                <span>To</span>
                <input type="text" name="to" value=<?php echo $to; ?>>
            </div>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
