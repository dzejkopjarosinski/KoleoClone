<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="test.php">
        <input type="time" name="czas">
        <input type="submit">
    </form>
<?php
$newDate = date('m/d/Y h:i:s a');
echo $newDate;
?>
</body>
</html>
