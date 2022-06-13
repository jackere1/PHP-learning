<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Testing php</title>
</head>
<body>
    <table>
    <?php
        for($i = 0; $i < 10; $i++) {
            echo "<tr>";
            for($j = 0; $j < 10; $j++) {
                if($i === 0) {
                    echo "<td>$j</td>";
                    continue;
                }
                if($j === 0) {
                    echo "<td>$i</td>";
                    continue;
                }
                echo "<td>".$i * $j."</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>