<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <?php 
        foreach($query as $k=>$v):
            echo "<tr>";
            echo "<td>".$v->id."</td>";
            echo "<td>".$v->nom."</td>";
            echo "<td>".$v->prenom."</td>";
            echo "</tr>";
        endforeach;
        ?>
    </table>
</body>
</html>