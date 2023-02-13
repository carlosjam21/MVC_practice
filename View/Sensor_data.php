<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Data</title>
</head>
<body>

<table>
    <tr>
        <th>Mac Address</th>
        <th>Alias</th>
        <th>Data</th>
    </tr>
    <?php foreach($data as $info): ?>
        <tr>
            <td><?=$info["mac"]?></td>
            <td><?=$info["alias"]?></td>
            <td><?=$info["level"]?></td>
        </tr>
    <?php endforeach;?>
</table>

</body>
</html>



