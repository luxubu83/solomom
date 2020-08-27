<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chu</title>
</head>
<body>
    <?php
    include_once(__DIR__.'/dbconnectx.php');
    $sql = <<<EOT
    SELECT httt_ma AS MaThanhToan, httt_ten AS TenThanhToan FROM `hinhthucthanhtoan`
EOT;


$result = mysqli_query($conn, $sql);

$data = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = array(
            'ma' => $row['MaThanhToan'],
            'ten' => $row['TenThanhToan'],
        );
    }
   
    ?>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Mã Hình thức Thanh toán</th>
                <th>Tên Hình thức Thanh toán</th>
                <th>Xóa hình thức thanh toán</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $httt): ?>
            <tr>
                <td><?= $httt['ma']; ?></td>
                <td><?= $httt['ten']; ?></td>
                <td><a href="delete.php?httt_ma=<?php echo $httt['ma']; ?>">Xóa</a></td>
            </tr>
            <?php endforeach; ?>
</tbody>
    </table>
    
</body>
</html>