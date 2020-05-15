<?php
include("../../utile/formatage.php");
include("../../utile/config.php");
$NAME = "A.C.G.L";
$REGION = "Rhône (69)";
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../sources/images/Autres/ACGL-logo.png"/>
    <!-- Fonts Awesome -->
	<link rel="stylesheet" href="../../fonts/font-awesome.min.css">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../../css/main.css" rel="stylesheet"/>
    <link href="https://fonts.google.com/specimen/Fredoka+One?selection.family=Fredoka+One" rel="stylesheet"/>
    <link href="https://fonts.google.com/specimen/Copse" rel="stylesheet"/>

</head>
<body>

    <div class="container-fluid" id="ancremenu"> <!-- p pour padding / mt pour marging top et rounded pour les arrondis des coins-->
        <!-- Header du site -->
       <header class="bg-dark text-white perso_policeTitre py-2 mb-5">
           <div class="row align-items-center m-0">
                <div class="col-2 col-lg-2 p-2 text-center">
                    <a href="../Global/index.php">
                        <img src="../../sources/images/Autres/ACGL-logo.png" class="rounded-square img-fluid perso_logoSize" alt="logo du site"/>
                    </a>
                </div>
                <div class="col-6 col-lg-8 m-0 p-0">
                    <?php include("../Commons/menu.php")?>
                </div>
                <div class="col-4 col-lg-2 text-right pt-1 pr-4 perso_Gras"> <!-- d-none d-lg-block : d-none pour display: none / d-lg-block pour que le text s'affiche que quand l'écran est large-->
                     <?= $NAME ?> <br /> <?= $REGION ?>
                </div>
           </div>

       </header>

       <!-- Contenu du site -->
       <div class="p-1 perso_minCorpSize px-5">
           

       