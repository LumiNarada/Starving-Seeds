<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Seeds</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MuseoModerno&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700&amp;display=swap">
    <link rel="stylesheet" href="../fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="../css/Pretty-Footer.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body style="background: #292c2f;color: #E1DDBB;">
<nav class="navbar navbar-light navbar-expand sticky-top" style="color: #E1DDBB;background: #2C2A33;">
    <div class="container"><img id="logo" src="../img/Icon.png"><a class="navbar-brand" href="#" style="color: #E1DDBB;border-color: #292c2f;"><strong>Starving&nbsp;</strong>Seeds</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1" style="color: #E1DDBB;">
            <ul class="navbar-nav ms-auto" style="color: #E1DDBB;">
                <li class="nav-item" style="color: rgb(122,75,72);background: 7A4B48;"><a class="nav-link active" href="#" style="color: rgb(225,221,187);"><strong>Intro</strong></a></li>
                <li class="nav-item" style="color: #E1DDBB;"><a class="nav-link" href="#" style="color: #E1DDBB;">Autum</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: #E1DDBB;">Winter</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: #E1DDBB;">Spring</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: #E1DDBB;">Summer</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="d-lg-flex justify-content-lg-center" id="promo">
    <div class="jumbotron" style="background: rgba(2,4,3,0.5);">
        <h1 class="display-4" style="color: #DBD7BB;font-family: MuseoModerno, serif;"><strong>Starving Seeds</strong></h1>

            @php
                $seasons=["Autumn","Winter", "Spring", "Summer"];
                $seeds=[
                    "Asparagus"=>[
                                "season"=>["Winter", "Spring"],
                                "nutrients"=>[
                                    "formula"=>1,
                                    "compost"=>-2,
                                    "manure"=>1
                                ]
                    ],
                    "Carrot"=>[
                                "season"=>["Autumn", "Winter", "Spring"],
                                "nutrients"=>[
                                    "formula"=>-2,
                                    "compost"=>1,
                                    "manure"=>1
                                ]
                    ],
                    "Corn"=>[
                                "season"=>["Autumn", "Spring", "Summer"],
                                "nutrients"=>[
                                    "formula"=> 1,
                                    "compost"=>-2,
                                    "manure"=>1
                                ]
                    ],
                    "Dragon"=>[
                                "season"=>["Spring", "Summer"],
                                "nutrients"=>[
                                    "formula"=>2,
                                    "compost"=>2,
                                    "manure"=>-4
                                ]
                    ],
                    "Durian"=>[
                                "season"=>["Spring"],
                                "nutrients"=>[
                                    "formula"=>2,
                                    "compost"=>-4,
                                    "manure"=>2
                                ]
                    ],
                    "Eggplant"=>[
                                "season"=>["Autumn", "Spring"],
                                "nutrients"=>[
                                    "formula"=>1,
                                    "compost"=>1,
                                    "manure"=>-2
                                ]
                    ],
                    "Garlic"=>[
                                "season"=>["Autumn", "Winter", "Spring", "Summer"],
                                "nutrients"=>[
                                    "formula"=>2,
                                    "compost"=>-4,
                                    "manure"=>2
                                ]
                    ],
                    "Onion"=>[
                                "season"=>["Autumn", "Spring", "Summer"],
                                "nutrients"=>[
                                    "formula"=>-4,
                                    "compost"=>2,
                                    "manure"=>2
                                ]
                    ],
                    "Pepper"=>[
                                "season"=>["Autumn", "Summer"],
                                "nutrients"=>[
                                    "formula"=>2,
                                    "compost"=>2,
                                    "manure"=>-4
                                ]
                    ],
                    "Pomegranate"=>[
                                "season"=>["Spring", "Summer"],
                                "nutrients"=>[
                                    "formula"=>-4,
                                    "compost"=>2,
                                    "manure"=>2
                                ]
                    ],
                    "Potato"=>[
                                "season"=>["Autumn", "Winter", "Spring"],
                                "nutrients"=>[
                                    "formula"=>1,
                                    "compost"=>1,
                                    "manure"=>-2
                                ]
                    ],
                    "Pumpkin"=>[
                                "season"=>["Autumn", "Winter"],
                                "nutrients"=>[
                                    "formula"=>-2,
                                    "compost"=>1,
                                    "manure"=>1
                                ]
                    ],
                    "Toma"=>[
                                "season"=>["Autumn", "Spring", "Summer"],
                                "nutrients"=>[
                                    "formula"=>-1,
                                    "compost"=>-1,
                                    "manure"=>2
                                ]
                    ],
                    "Watermelon"=>[
                                "season"=>["Spring", "Summer"],
                                "nutrients"=>[
                                    "formula"=>2,
                                    "compost"=>-1,
                                    "manure"=>-1
                                ]
                    ]
                ];
            @endphp
    </div>
</div>
<section class="dark-section" style="background: #2C2A33;">
    <div class="container site-section" id="picture" style="padding-top: 30px;">
        <h1 style="color: #E1DDBB;margin-bottom: 17px;"><strong>Introduction</strong></h1>
        <div class="row">
            <div class="col-md-4 item">
                <h2 style="color: #E1DDBB;">Growth formula<br></h2><a href="../img/Growth_Formula.png" target="_blank" data-lightbox="nutrients" data-title="Growth Formula"><img src="../img/Growth_Formula.png"></a>
            </div>
            <div class="col-md-4 item">
                <h2 style="color: #E1DDBB;">Compost<br></h2><a href="../img/Compost.png" target="_blank" data-lightbox="nutrients" data-title="Compost"><img src="../img/Compost.png"></a>
            </div>
            <div class="col-md-4 item">
                <h2 style="color: #E1DDBB;">Manure</h2><a href="../img/Manure.png" target="_blank" data-lightbox="nutrients" data-title="Manure"><img src="../img/Manure.png" data-lightbox="paint"></a>
            </div>
        </div>
    </div>
</section>
@foreach($seasons as $season)
    @php
        $season_plants=array();
        $season_combinations=array();
    @endphp
    <section class="dark-section" style="background: #090c12;">
        <div class="container site-section" id="picture-4" style="padding-top: 30px;">
            <h1 style="color: #E1DDBB;margin-bottom: 17px;"><strong>{{$season}}</strong></h1>
            <div style="margin-bottom: 17px;">
                @foreach($seeds as $seed => $description)
                    @foreach($description["season"] as $season_plant)
                        @if($season_plant==$season)
                            <img src="../img/{{$seed}}.png" style="width: 40px;">
                            @php
                                $season_plants[$seed]=$description["nutrients"];
                            @endphp
                        @endif
                    @endforeach
                @endforeach
            </div>
            <div class="row d-md-flex d-xl-flex align-items-md-start align-items-xl-start">
                <div class="col-md-4 d-flex d-sm-flex d-md-flex flex-column justify-content-center align-items-center align-items-sm-center align-items-lg-center item" style="margin-bottom: 10px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-lg-center align-items-lg-start align-items-xl-start esquema">
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="segundo"></div>
                        <div class="segundo"></div>
                        <div class="segundo"></div>
                        <div class="segundo"></div>
                        <div class="nulo"></div>
                        <div class="primero"></div>
                        <div class="segundo"></div>
                        <div class="nulo"></div>
                        <div class="primero"></div>
                        <div class="segundo"></div>
                        <div class="segundo"></div>
                        <div class="segundo"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                    </div>
                    <div style="width: 90%;padding-right: 15%;padding-left: 15%;">
                        <div class="row" style="width: 100%;margin-right: 0px;margin-left: 0px;">
                            <div class="col" style="width: 33%;">
                                <p style="color: #E1DDBB;">First Seed</p>
                            </div>
                            <div class="col" style="width: 33%;">
                                <p style="color: #E1DDBB;">Second Seed</p>
                            </div>
                        </div>
                        @foreach($season_plants as $seed_primera => $description_primera)
                            @foreach($season_plants as $seed_segunda => $description_segunda)
                                @if($description_primera["formula"] + $description_segunda["formula"] == 0 && $description_primera["compost"] + $description_segunda["compost"] == 0 && $description_primera["manure"] + $description_segunda["manure"] == 0)
                                    @if($season_combinations == NULL)
                                        @php
                                            $combination=[
                                                "seed_primera"=>$seed_primera,
                                                "seed_segunda"=>$seed_segunda
                                            ];
                                            array_push($season_combinations, $combination)
                                        @endphp
                                    @else
                                        @php
                                            $repeticion=0;
                                        @endphp
                                        @foreach($season_combinations as $season_combination => $plants_combination)
                                            @if($seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_segunda"] || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_primera"] )
                                                @php
                                                    $repeticion=1;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if($repeticion==0)
                                            @php
                                                $combination=[
                                                    "seed_primera"=>$seed_primera,
                                                    "seed_segunda"=>$seed_segunda
                                                ];
                                                array_push($season_combinations, $combination)
                                            @endphp
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @foreach($season_combinations as $impresion => $official_seeds)
                            <div class="row" style="width: 100%;margin-right: 0px;margin-left: 0px;">
                                <div class="col"><img src="../img/{{$official_seeds["seed_primera"]}}.png" style="width: 70%;"></div>
                                <div class="col"><img src="../img/{{$official_seeds["seed_segunda"]}}.png" style="width: 70%;"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 d-flex d-sm-flex d-md-flex flex-column justify-content-start align-items-center align-items-sm-center align-items-lg-center item" style="margin-bottom: 10px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-lg-center align-items-lg-start align-items-xl-start esquema">
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="segundo"></div>
                        <div class="segundo"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="segundo"></div>
                        <div class="segundo"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="segundo"></div>
                        <div class="segundo"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                    </div>
                    <div style="width: 90%;">
                        <div class="row" style="width: 100%;margin-right: 0px;margin-left: 0px;">
                            <div class="col" style="width: 33%;">
                                <p style="color: #E1DDBB;">First Seed</p>
                            </div>
                            <div class="col" style="width: 33%;">
                                <p style="color: #E1DDBB;">Second Seed</p>
                            </div>
                            <div class="col" style="width: 33%;">
                                <p style="color: #E1DDBB;">Third Seed</p>
                            </div>
                        </div>
                        @php
                            $season_combinations=array();
                        @endphp
                        @foreach($season_plants as $seed_primera => $description_primera)
                            @foreach($season_plants as $seed_segunda => $description_segunda)
                                @if(2*$description_primera["formula"] + $description_segunda["formula"] == 0 && 2*$description_primera["compost"] + $description_segunda["compost"] == 0 && 2*$description_primera["manure"] + $description_segunda["manure"] == 0)
                                    @if($season_combinations == NULL)
                                        @php
                                            $combination=[
                                                "seed_primera"=>$seed_primera,
                                                "seed_segunda"=>$seed_segunda
                                            ];
                                            array_push($season_combinations, $combination)
                                        @endphp
                                    @else
                                        @php
                                            $repeticion=0;
                                        @endphp
                                        @foreach($season_combinations as $season_combination => $plants_combination)
                                            @if($seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_segunda"] || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_primera"] )
                                                @php
                                                    $repeticion=1;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if($repeticion==0)
                                            @php
                                                $combination=[
                                                    "seed_primera"=>$seed_primera,
                                                    "seed_segunda"=>$seed_segunda
                                                ];
                                                array_push($season_combinations, $combination)
                                            @endphp
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @foreach($season_combinations as $impresion => $official_seeds)
                            <div class="row" style="width: 100%;margin-right: 0px;margin-left: 0px;">
                                <div class="col"><img src="../img/{{$official_seeds["seed_primera"]}}.png" style="width: 70%;"></div>
                                <div class="col"><img src="../img/{{$official_seeds["seed_primera"]}}.png" style="width: 70%;"></div>
                                <div class="col"><img src="../img/{{$official_seeds["seed_segunda"]}}.png" style="width: 70%;"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 d-flex d-sm-flex d-md-flex flex-column justify-content-start align-items-center align-items-sm-center align-items-lg-center item" style="margin-bottom: 10px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-lg-center align-items-lg-start align-items-xl-start esquema">
                        <div class="primero"></div>
                        <div class="segundo"></div>
                        <div class="tercero"></div>
                        <div class="tercero"></div>
                        <div class="segundo"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="segundo"></div>
                        <div class="tercero"></div>
                        <div class="tercero"></div>
                        <div class="segundo"></div>
                        <div class="primero"></div>
                        <div class="primero"></div>
                        <div class="segundo"></div>
                        <div class="tercero"></div>
                        <div class="tercero"></div>
                        <div class="segundo"></div>
                        <div class="primero"></div>
                    </div>
                    <div style="width: 90%;">
                        <div class="row" style="width: 100%;margin-right: 0px;margin-left: 0px;">
                            <div class="col" style="width: 33%;">
                                <p style="color: #E1DDBB;">First Seed</p>
                            </div>
                            <div class="col" style="width: 33%;">
                                <p style="color: #E1DDBB;">Second Seed</p>
                            </div>
                            <div class="col">
                                <p style="color: #E1DDBB;">Third Seed</p>
                            </div>
                        </div>
                        @php
                            $season_combinations=array();
                        @endphp
                        @foreach($season_plants as $seed_primera => $description_primera)
                            @foreach($season_plants as $seed_segunda => $description_segunda)
                                @foreach($season_plants as $seed_tercera => $description_tercera)
                                    @if($description_primera["formula"] + $description_segunda["formula"] + $description_tercera["formula"] == 0 && $description_primera["compost"] + $description_segunda["compost"] + $description_tercera["compost"]== 0 && $description_primera["manure"] + $description_segunda["manure"] + $description_tercera["manure"]== 0)
                                        @if($season_combinations == NULL)
                                            @php
                                                $combination=[
                                                    "seed_primera"=>$seed_primera,
                                                    "seed_segunda"=>$seed_segunda,
                                                    "seed_tercera"=>$seed_tercera
                                                ];
                                                array_push($season_combinations, $combination)
                                            @endphp
                                        @else
                                            @php
                                                $repeticion=0;
                                            @endphp
                                            @foreach($season_combinations as $season_combination => $plants_combination)
                                                @if($seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_primera"] && $seed_tercera == $plants_combination["seed_primera"]
                                                || $seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_primera"] && $seed_tercera == $plants_combination["seed_segunda"]
                                                || $seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_primera"] && $seed_tercera == $plants_combination["seed_tercera"]

                                                || $seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_segunda"] && $seed_tercera == $plants_combination["seed_primera"]
                                                || $seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_segunda"] && $seed_tercera == $plants_combination["seed_segunda"]
                                                || $seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_segunda"] && $seed_tercera == $plants_combination["seed_tercera"]

                                                || $seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_tercera"] && $seed_tercera == $plants_combination["seed_primera"]
                                                || $seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_tercera"] && $seed_tercera == $plants_combination["seed_segunda"]
                                                || $seed_primera == $plants_combination["seed_primera"] && $seed_segunda == $plants_combination["seed_tercera"] && $seed_tercera == $plants_combination["seed_tercera"]

                                                || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_primera"] && $seed_tercera == $plants_combination["seed_primera"]
                                                || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_primera"] && $seed_tercera == $plants_combination["seed_segunda"]
                                                || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_primera"] && $seed_tercera == $plants_combination["seed_tercera"]

                                                || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_segunda"] && $seed_tercera == $plants_combination["seed_primera"]
                                                || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_segunda"] && $seed_tercera == $plants_combination["seed_segunda"]
                                                || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_segunda"] && $seed_tercera == $plants_combination["seed_tercera"]

                                                || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_tercera"] && $seed_tercera == $plants_combination["seed_primera"]
                                                || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_tercera"] && $seed_tercera == $plants_combination["seed_segunda"]
                                                || $seed_primera == $plants_combination["seed_segunda"] && $seed_segunda == $plants_combination["seed_tercera"] && $seed_tercera == $plants_combination["seed_tercera"]

                                                || $seed_primera == $plants_combination["seed_tercera"] && $seed_segunda == $plants_combination["seed_primera"] && $seed_tercera == $plants_combination["seed_primera"]
                                                || $seed_primera == $plants_combination["seed_tercera"] && $seed_segunda == $plants_combination["seed_primera"] && $seed_tercera == $plants_combination["seed_segunda"]
                                                || $seed_primera == $plants_combination["seed_tercera"] && $seed_segunda == $plants_combination["seed_primera"] && $seed_tercera == $plants_combination["seed_tercera"]

                                                || $seed_primera == $plants_combination["seed_tercera"] && $seed_segunda == $plants_combination["seed_segunda"] && $seed_tercera == $plants_combination["seed_primera"]
                                                || $seed_primera == $plants_combination["seed_tercera"] && $seed_segunda == $plants_combination["seed_segunda"] && $seed_tercera == $plants_combination["seed_segunda"]
                                                || $seed_primera == $plants_combination["seed_tercera"] && $seed_segunda == $plants_combination["seed_segunda"] && $seed_tercera == $plants_combination["seed_tercera"]

                                                || $seed_primera == $plants_combination["seed_tercera"] && $seed_segunda == $plants_combination["seed_tercera"] && $seed_tercera == $plants_combination["seed_primera"]
                                                || $seed_primera == $plants_combination["seed_tercera"] && $seed_segunda == $plants_combination["seed_tercera"] && $seed_tercera == $plants_combination["seed_segunda"]
                                                || $seed_primera == $plants_combination["seed_tercera"] && $seed_segunda == $plants_combination["seed_tercera"] && $seed_tercera == $plants_combination["seed_tercera"]

                                                || $seed_primera == $seed_segunda || $seed_primera == $seed_tercera || $seed_segunda == $seed_tercera
                                                )
                                                    @php
                                                        $repeticion=1;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @if($repeticion==0)
                                                @php
                                                    $combination=[
                                                        "seed_primera"=>$seed_primera,
                                                        "seed_segunda"=>$seed_segunda,
                                                        "seed_tercera"=>$seed_tercera
                                                    ];
                                                    array_push($season_combinations, $combination)
                                                @endphp
                                            @endif
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        @foreach($season_combinations as $impresion => $official_seeds)
                            <div class="row" style="width: 100%;margin-right: 0px;margin-left: 0px;">
                                <div class="col"><img src="../img/{{$official_seeds["seed_primera"]}}.png" style="width: 70%;"></div>
                                <div class="col"><img src="../img/{{$official_seeds["seed_segunda"]}}.png" style="width: 70%;"></div>
                                <div class="col"><img src="../img/{{$official_seeds["seed_tercera"]}}.png" style="width: 70%;"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
<footer style="background: #2C2A33;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">Starving Seeds Inc</a></h3>
                <p class="links">Lumi Narada</p>
                <p class="company-name">Todos los derechos reservados © 2021</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">FI. UNAM.</span></p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left">999999999999</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">Lumi_Narada@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-4 footer-about">
                <h4>Gracias por visitar!</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </div>
</footer>
<script src="../../public/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>
