<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Lista de usuarios</h1>
    <table>
    <?php
        foreach($users as $user){
            echo "<tr>";
            echo "<td>usuario $user[0]</td>";
            echo "<td> $user[1]</td>";
            echo "<td><a href='?method=show&id=$user[0]'>Ver</a></td>";
            echo "</tr>";
            
        }
    ?>
    </table>
</body>
</html>

