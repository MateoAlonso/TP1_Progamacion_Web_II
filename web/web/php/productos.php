<?php
    require_once("functions.php");
    $array_productos=array(
        1=>[
            "id_producto"=>1,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1,
            "imagensrc"=>"img/reloj_1.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
            
        ],
        2=>[
            "id_producto"=>2,
            "id_categoria"=>2,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1,
            "imagensrc"=>"img/reloj_2.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        3=>[
            "id_producto"=>3,
            "id_categoria"=>3,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>2,
            "imagensrc"=>"img/reloj_3.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        4=>[
            "id_producto"=>4,
            "id_categoria"=>4,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>4,
            "imagensrc"=>"img/reloj_4.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        5=>[
            "id_producto"=>5,
            "id_categoria"=>5,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>3,
            "imagensrc"=>"img/reloj_5.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        6=>[
            "id_producto"=>6,
            "id_peoducto"=>1,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1,
            "imagensrc"=>"img/reloj_6.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        7=>[
            "id_producto"=>7,
            "id_categoria"=>2,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1,
            "imagensrc"=>"img/reloj_7.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        8=>[
            "id_producto"=>8,
            "id_categoria"=>3,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>2,
            "imagensrc"=>"img/reloj_8.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        9=>[
            "id_producto"=>9,
            "id_categoria"=>4,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>4,
            "imagensrc"=>"img/reloj_9.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        10=>[
            "id_producto"=>10,
            "id_categoria"=>5,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>3,
            "imagensrc"=>"img/reloj_10.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        11=>[
            "id_producto"=>11,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1,
            "imagensrc"=>"img/reloj_11.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        12=>[
            "id_producto"=>12,
            "id_categoria"=>2,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1,
            "imagensrc"=>"img/reloj_12.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        13=>[
            "id_producto"=>13,
            "id_categoria"=>3,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>2,
            "imagensrc"=>"img/reloj_13.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        14=>[
            "id_producto"=>14,
            "id_categoria"=>4,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>4,
            "imagensrc"=>"img/reloj_14.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        15=>[
            "id_producto"=>15,
            "id_categoria"=>5,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>3,
            "imagensrc"=>"img/reloj_15.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        16=>[
            "id_producto"=>16,
            "id_peoducto"=>1,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1,
            "imagensrc"=>"img/reloj_16.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        17=>[
            "id_producto"=>17,
            "id_categoria"=>2,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>1,
            "imagensrc"=>"img/reloj_17.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        18=>[
            "id_producto"=>18,
            "id_categoria"=>3,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>2,
            "imagensrc"=>"img/reloj_18.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        19=>[
            "id_producto"=>19,
            "id_categoria"=>4,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>4,
            "imagensrc"=>"img/reloj_19.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ],
        20=>[
            "id_producto"=>20,
            "id_categoria"=>5,
            "nombre"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "marca"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "modelo"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "id_categoria"=>3,
            "imagensrc"=>"img/reloj_20.jpg",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non commodo turpis. Mauris sed luctus eros. Morbi vulputate egestas pulvinar. Cras posuere magna at urna tempus, ultrices posuere arcu aliquet. Praesent gravida ac quam sit amet pellentesque. Morbi eu lorem at leo accumsan congue. In et elit ac orci posuere tristique.",
            "precio"=>0000
        ]
    );
    GrabarArrayJson("Json","productos.json",$array_productos);
?>