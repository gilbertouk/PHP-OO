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
        require_once "Pessoa.php";

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $p = new Pessoa("Gilberto", 22, "M");
        print_r($v);
        print_r($p);
    ?>
    </pre>
</body>
</html>