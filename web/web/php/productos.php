<?php
    require_once("functions.php");
    $array_productos=array(
        1=>[
            "id_producto"=>1,
            "nombre"=>"rolex golden",
            "marca"=>"rolex",
            "modelo"=>"vintage",
            "id_categoria"=>2,
            "imagengrande"=>"img/img_grandes/reloj_1.jpg",
            "descripcion"=>"Material de la correa: oro, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_1.jpg",
            "precio"=>30000
            
        ],
        2=>[
            "id_producto"=>2,
            "nombre"=>"rolex two",
            "marca"=>"rolex",
            "modelo"=>"celta",
            "id_categoria"=>4,
            "imagengrande"=>"img/img_grandes/reloj_2.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_2.jpg",
            "precio"=>15000
        ],
        3=>[
            "id_producto"=>3,
            "nombre"=>"rolex wind",
            "marca"=>"rolex",
            "modelo"=>"irish",
            "id_categoria"=>3,
            "imagengrande"=>"img/img_grandes/reloj_3.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_3.jpg",
            "precio"=>14000
        ],
        4=>[
            "id_producto"=>4,
            "nombre"=>"rolex tiger",
            "marca"=>"rolex",
            "modelo"=>"eagle",
            "id_categoria"=>1,
            "imagengrande"=>"img/img_grandes/reloj_4.jpg",
            "descripcion"=>"Material de la correa: metal platino, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_4.jpg",
            "precio"=>5000
        ],
        5=>[
            "id_producto"=>5,
            "nombre"=>"rolex near",
            "marca"=>"rolex",
            "modelo"=>"valtic",
            "id_categoria"=>5,
            "imagengrande"=>"img/img_grandes/reloj_5.jpg",
            "descripcion"=>"Material de la correa: metal carbonico, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_5.jpg",
            "precio"=>32000
        ],
        6=>[
            "id_producto"=>6,
            "nombre"=>"rolex tree",
            "marca"=>"rolex",
            "modelo"=>"fest",
            "id_categoria"=>1,
            "imagengrande"=>"img/img_grandes/reloj_6.jpg",
            "descripcion"=>"Material de la correa: cristal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_6.jpg",
            "precio"=>3000
        ],
        7=>[
            "id_producto"=>7,
            "nombre"=>"rolex brown",
            "marca"=>"rolex",
            "modelo"=>"raw",
            "id_categoria"=>4,
            "imagengrande"=>"img/img_grandes/reloj_7.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_7.jpg",
            "precio"=>4000
        ],
        8=>[
            "id_producto"=>8,
            "nombre"=>"rolex rubi",
            "marca"=>"rolex",
            "modelo"=>"sort",
            "id_categoria"=>3,
            "imagengrande"=>"img/img_grandes/reloj_8.jpg",
            "descripcion"=>"Material de la correa: rubi, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_8.jpg",
            "precio"=>3000
        ],
        9=>[
            "id_producto"=>9,
            "nombre"=>"rolex perl",
            "marca"=>"rolex",
            "modelo"=>"jam",
            "id_categoria"=>4,
            "imagengrande"=>"img/img_grandes/reloj_9.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_9.jpg",
            "precio"=>12000
        ],
        10=>[
            "id_producto"=>10,
            "nombre"=>"rolex shine",
            "marca"=>"rolex",
            "modelo"=>"stereo",
            "id_categoria"=>5,
            "imagengrande"=>"img/img_grandes/reloj_10.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_10.jpg",
            "precio"=>110000
        ],
        11=>[
            "id_producto"=>11,
            "nombre"=>"rolex yux",
            "marca"=>"rolex",
            "modelo"=>"vinsel",
            "id_categoria"=>2,
            "imagengrande"=>"img/img_grandes/reloj_11.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_11.jpg",
            "precio"=>2000
        ],
        12=>[
            "id_producto"=>12,
            "nombre"=>"rolex ten",
            "marca"=>"rolex",
            "modelo"=>"cross",
            "id_categoria"=>2,
            "imagengrande"=>"img/img_grandes/reloj_12.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_12.jpg",
            "precio"=>14000
        ],
        13=>[
            "id_producto"=>13,
            "nombre"=>"rolex twister",
            "marca"=>"rolex",
            "modelo"=>"twister",
            "id_categoria"=>5,
            "imagengrande"=>"img/img_grandes/reloj_13.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_13.jpg",
            "precio"=>3300
        ],
        14=>[
            "id_producto"=>14,
            "nombre"=>"rolex rally",
            "marca"=>"rolex",
            "modelo"=>"rally",
            "id_categoria"=>5,
            "imagengrande"=>"img/img_grandes/reloj_14.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_14.jpg",
            "precio"=>2000
        ],
        15=>[
            "id_producto"=>15,
            "nombre"=>"rolex front",
            "marca"=>"rolex",
            "modelo"=>"fever",
            "id_categoria"=>2,
            "imagengrande"=>"img/img_grandes/reloj_15.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_15.jpg",
            "precio"=>4000
        ],
        16=>[
            "id_producto"=>16,
            "nombre"=>"rolex gear",
            "marca"=>"rolex",
            "modelo"=>"gear",
            "id_categoria"=>3,
            "imagengrande"=>"img/img_grandes/reloj_16.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_16.jpg",
            "precio"=>7000
        ],
        17=>[
            "id_producto"=>17,
            "nombre"=>"rolex charm",
            "marca"=>"rolex",
            "modelo"=>"charm",
            "id_categoria"=>4,
            "imagengrande"=>"img/img_grandes/reloj_17.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_17.jpg",
            "precio"=>5000
        ],
        18=>[
            "id_producto"=>18,
            "nombre"=>"rolex fiurex",
            "marca"=>"rolex",
            "modelo"=>"fiurex",
            "id_categoria"=>3,
            "imagengrande"=>"img/img_grandes/reloj_18.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_18.jpg",
            "precio"=>4000
        ],
        19=>[
            "id_producto"=>19,
            "nombre"=>"rolex fedex",
            "marca"=>"rolex",
            "modelo"=>"fedex",
            "id_categoria"=>2,
            "imagengrande"=>"img/img_grandes/reloj_19.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_19.jpg",
            "precio"=>2000
        ],
        20=>[
            "id_producto"=>20,
            "nombre"=>"rolex claim",
            "marca"=>"rolex",
            "modelo"=>"claim",
            "id_categoria"=>5,
            "imagengrande"=>"img/img_grandes/reloj_20.jpg",
            "descripcion"=>"Material de la correa: metal, resistente al agua",
            "imagenchica"=>"img/img_chicas/reloj_20.jpg",
            "precio"=>8000
        ]
    );
    GrabarArrayJson("Json","productos.json",$array_productos);
?>