<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <pre>
    <?php 
       require_once "Video.php";
       require_once "Gafanhoto.php";
       require_once "Visualizacao.php";

       $v[0] = new Video("Aula 1 de POO");
       $v[1] = new Video("Aula 12 de PHP");
       $v[2] = new Video("Aula 15 de HTML5");

       $p[0] = new Gafanhoto("Gilberto", 22, "M", "gil");
       $p[1] = new Gafanhoto("Lethicia", 29, "F", "let");

       $vis[0] = new Visualizacao($p[0], $v[2]);
       $vis[1] = new Visualizacao($p[0], $v[1]);

       $vis[0]->avaliar();
       $vis[1]->avaliarPorc(85);
       print_r($vis);
    ?>
    </pre>
</body>
</html>