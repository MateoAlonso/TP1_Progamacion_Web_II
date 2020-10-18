<?php
    require_once("functions.php");
    $array_productos=array(
        1=>[
            "id_peoducto"=>1,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1
        ],
        2=>[
            "id_categoria"=>2,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1
        ],
        3=>[
            "id_categoria"=>3,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>2
        ],
        4=>[
            "id_categoria"=>4,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>4
        ],
        5=>[
            "id_categoria"=>5,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>3
        ],
        6=>[
            "id_peoducto"=>1,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1
        ],
        7=>[
            "id_categoria"=>2,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1
        ],
        8=>[
            "id_categoria"=>3,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>2
        ],
        9=>[
            "id_categoria"=>4,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>4
        ],
        10=>[
            "id_categoria"=>5,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>3
        ],
        11=>[
            "id_peoducto"=>1,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1
        ],
        12=>[
            "id_categoria"=>2,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1
        ],
        13=>[
            "id_categoria"=>3,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>2
        ],
        14=>[
            "id_categoria"=>4,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>4
        ],
        15=>[
            "id_categoria"=>5,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>3
        ],
        16=>[
            "id_peoducto"=>1,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1
        ],
        17=>[
            "id_categoria"=>2,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1
        ],
        18=>[
            "id_categoria"=>3,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>2
        ],
        19=>[
            "id_categoria"=>4,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>4
        ],
        20=>[
            "id_categoria"=>5,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>3
        ]
    );
    GrabarArrayJson("Json","productos.json",$array_productos);
?>