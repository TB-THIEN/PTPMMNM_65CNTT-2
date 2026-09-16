<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title> BANG CUU CHUONG</title>
    <style>
    </style>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <?php
            for($i = 1; $i <= 10; $i++) {
                echo "<th>Chuong $i</th>";
            }
            ?>
        </tr>
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "<tr>"; 
            
            for($j = 1; $j <= 10; $j++) {
                echo "<td> $j x $i = " . ($i * $j) . "</td>";
            }
            
            echo "</tr>";
        }
        ?>
    </table>
                    
</body>
</html>