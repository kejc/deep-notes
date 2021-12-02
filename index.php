<?php
print_r($_POST);
include("./functions.php");
include("./controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deep(pink)Notes</title>
</head>
<body bgcolor="#ff1493">
    <form method="post">
        <input type="text" name="note">
        <button type="submit">Gem</button>
    </form>

    <ul>
        <!-- Her starter jeg mit loop -->
        <?php foreach(getFromFile() as $i => $note) { ?>
            <li>
                <?php echo $note; ?>
                <a href="?i=<?php echo $i; ?>">Slet</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>