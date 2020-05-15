<?php

function styleTitreNiveau1($text, $color){
    $txt = "<h1 class='text-center my-3 ".$color." perso_policeTitre perso_textShadow'>";
    $txt .= $text;
    $txt .= "</h1>";
    return $txt;
}

function styleTitreNiveau2($text, $color){
    $txt = "<h2 class='text-center my-3 ".$color." perso_policeTitre perso_textShadow'>";
    $txt .= $text;
    $txt .= "</h2>";
    return $txt;
}

function styleTitreNiveau3($text, $color){
    $txt = "<h3 class='my-3 ".$color." perso_policeTitre perso_textShadow perso_size26'>";
    $txt .= $text;
    $txt .= "</h3>";
    return $txt;
}

function styleTitreNiveau4($text, $color){
    $txt = "<h2 class='text-center my-3 ".$color." perso_policeTitre perso_size18'>";
    $txt .= $text;
    $txt .= "</h2>";
    return $txt;
}

function styleTitrePost($text){
    $txt = "<h2 class='my-3 perso_policeTitre perso_textShadow border-bottom border-dark'>";
    $txt .= $text;
    $txt .= "</h2>";
    return $txt;
}

?>