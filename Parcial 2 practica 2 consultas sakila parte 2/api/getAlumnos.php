<?php 
    header("content-Type: application/json");
    header("access-control-Allow-Origin: *");
    
    
    $usuarios=[

        ["id" => 1, "nombre" => "Hugo Boss", "correo" => "hugo@gmail.com"],
        ["id" => 1, "nombre" => "Osman Sexo", "correo" => "osman@gmail.com"],
        ["id" => 1, "nombre" => "Sergio Martinez", "correo" => "hugo@gmail.com"],
    ];

    echo json_encode($usuarios);
?>
