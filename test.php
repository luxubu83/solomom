<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <form method="post" action="">
    <p> Hình thức thanh toán: </p>
    <input type="text" name="httt_ten" id="httt_ten"><br>
    <input type="submit" value="Thêm" action="">
    </form>

    <?php 
    include_once(__DIR__.'/dbconnectx.php');
    $loai_httt = $_POST['httt_ten']; //$_POST['httt_ten'];
    $sql = "INSERT INTO `hinhthucthanhtoan`(httt_ten) VALUES('$loai_httt');";
    mysqli_query($conn, $sql);
    ?>
</body>
</html>