<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kotak</title>
    <style>
        .td-1 {
            width: 30px;
            height: 30px;
            background-color: black;
        }
        .td-2 {
            height: 100px;
            width: 100px;
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 

        for ($line = 1; $line <= 5; $line++) { 
            echo "<tr>";
            for ($column = 1; $column <= 5; $column++){
                $box = $line + $column;
                if ($box % 2 == 0) {
                    echo "<td class='td-1'></td>";
                } else {
                    echo "<td class='td-2'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>