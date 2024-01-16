<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php $multi_x = 5; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <table>
        <tbody>
            <?php
            for($i = 1; $i <= 24; $i++){
                $result =  $multi_x * $i ;
                echo "
                <tr>
                    <td>$multi_x</td>
                    <td>x</td>
                    <td>$i</td>
                    <td>=</td>
                    <td>$result</td>
                </tr>";    
            }?>
        </tbody>
    </table>
</body>

</html>