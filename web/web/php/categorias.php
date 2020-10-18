<?php
    require_once("functions.php");
    $array_categoria=array(
        1=>[
            "id_categoria"=>1,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        2=>[
            "id_categoria"=>2,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        3=>[
            "id_categoria"=>3,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        4=>[
            "id_categoria"=>4,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        5=>[
            "id_categoria"=>5,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ]
    );
    GrabarArrayJson("Json","categorias.json",$array_categoria);
?>