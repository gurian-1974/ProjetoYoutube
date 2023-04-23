<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <pre>
        <?php
        
        require_once './Video.php';
        require_once './Pessoa.php';
        require_once './Gafanhoto.php';
        require_once './Visualizacao.php';
        
        $v[0]= new Video("Aula 01 poo");
        $v[1]= new Video("Aula 02 php");
        $v[2]= new Video("Aula 03 html5");
        $v[3]= new Video("Aula 04 css");
        $g[0] = new Gafanhoto("luciano", 49, "Maccho","juba");
        $g[1] = new Gafanhoto("aline", 33, "Femea","line");
        
        
        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[0]->avaliarNota(8);
        $vis[1] = new Visualizacao($g[1], $v[2]);
        $vis[1]->avaliarNota(3);
     
        
        var_dump($vis);
        
       
       // var_dump($g);
        //var_dump($v)
        
       
        
        ?>
        </pre>

    </body>
</html>
