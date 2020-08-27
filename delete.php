<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

include_once(__DIR__ . '/dbconnectx.php');
$httt_ma=$_GET['httt_ma'];
$sql = <<<EOT
DELETE FROM `hinhthucthanhtoan` WHERE httt_ma=$httt_ma
EOT;
mysqli_query($conn, $sql);
?>

</body>
</html>