<?php 
include("../Commons/header.php"); 
echo styleTitreNiveau1("Bienvenu !", COLOR_ACCUEIL); 
?>

    <!-- Debut carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active bg-dark"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="bg-dark"></li>
        </ol>
        <div class="carousel-inner">

            <!-- Debut d'un ITEM -->
            <div class="carousel-item active">
                <div class="row no-gutters border overflow-hidden mb-4 perso_bgRose"> <!-- no-gutters permet de supprimer les marges qui sont rajouter par les row ou colonnes / overflow-hidden permet d'afficher les éléments à l'écran sans problème et ça puis scoller-->
                    <div class="col-12 col-md-auto"> <!-- col-md-auto permet d'adapter l'image à la taille medium de l'écran -->
                        <img src="../../sources/images/Aminaux/Chats/Framboise/Framboise.jpg" style="height: 250px;" alt="Photo de Framboise" />
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="perso_colorRoseMenu perso_policeTitre perso_textShadow">Framboise</h3>
                        <div class="text-muted mb-1">02/2019</div>
                        <p class="mb-auto">
                            Description de Framboise
                        </p>
                    </div>
                </div>
            </div>
            <!-- Fin d'un ITEM -->

            <!-- Debut d'un ITEM -->
            <div class="carousel-item">
                <div class="row no-gutters border overflow-hidden mb-4 perso_bgRose"> <!-- no-gutters permet de supprimer les marges qui sont rajouter par les row ou colonnes / overflow-hidden permet d'afficher les éléments à l'écran sans problème et ça puis scoller-->
                    <div class="col-12 col-md-auto"> <!-- col-md-auto permet d'adapter l'image à la taille medium de l'écran -->
                        <img src="../../sources/images/Aminaux/Chats/Framboise/Framboise.jpg" style="height: 250px;" alt="Photo de Framboise" />
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="perso_colorRoseMenu perso_policeTitre perso_textShadow">Framboise</h3>
                        <div class="text-muted mb-1">02/2019</div>
                        <p class="mb-auto">
                            TEST
                        </p>
                    </div>
                </div>
            </div>
            <!-- Fin d'un ITEM -->
        </div>
    </div>
    <!-- Fin carousel -->

    
    <div class="row mt-5">

        <div class="col-12 col-md-4">
            <div class="mt-3">
                <?php 
                    $txt = "<img src='../../sources/images/Autres/icones/journal.png' alt='journal'/>Annonces";
                    echo styleTitreNiveau2($txt , COLOR_ACTUS); 
                ?>
            </div>
            <div class="row no-gutters border rounded mb-4">
                <div class="col-auto d-none d-lg-block"> <!-- d-none c-à-d de base ce block sera caché, sauf si il en en écran large : d-lg-block-->
                    <img src="../../sources/images/Aminaux/Chats/Framboise/Framboise.jpg" style="height: 200px;" alt="Photo de Framboise" />
                </div>
                <div class="col p-3 d-flex flex-column position-static perso_bgGreen">
                    <h3 class="mb-0 perso_colorVertMenu perso_policeTitre perso_textShadow">Assemblée <br>générale </h3>
                    <p class="perso_size12 mt-2">Un petit coucou de notre doyenne CHIPIE (20ans) en famille d'accueil longue durée chez notre trésorière
                        La miss a un programme journalier surchargé... 
                    </p>
                    <buttom class="btn my-2 mx-auto d-block btn-primary"><a href="#" style="color: white;">Visiter</a></buttom>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mt-3">
                <?php 
                    $txt = "<img src= '../../sources/images/Autres/icones/action.png' alt='action'/>Evénements";
                    echo styleTitreNiveau2($txt , COLOR_ACTUS); 
                ?>
            </div>
            <div class="row no-gutters border rounded mb-4">
                <div class="col-auto d-none d-lg-block"> <!-- d-none c-à-d de base ce block sera caché, sauf si il en en écran large : d-lg-block-->
                    <img src="../../sources/images/Aminaux/Chats/Framboise/Framboise.jpg" style="height: 200px;" alt="Photo de Framboise" />
                </div>
                <div class="col p-3 d-flex flex-column position-static perso_bgJaune">
                    <h3 class="mb-0 perso_colorJauneMenu perso_policeTitre perso_textShadow">Match de <br>Football</h3>
                    <p class="perso_size12 mt-2">Un petit coucou de notre doyenne CHIPIE (20ans) en famille d'accueil longue durée chez notre trésorière
                        La miss a un programme journalier surchargé... 
                    </p>
                    <buttom class="btn my-2 mx-auto d-block btn-primary"><a href="#" style="color: white;">Visiter</a></buttom>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mt-3">
                <?php 
                    $txt = "<img src= '../../sources/images/Autres/icones/action.png' alt='action'/>Actions";
                    echo styleTitreNiveau2($txt , COLOR_ACTUS); 
                ?>
            </div>
            <div class="row no-gutters border rounded mb-4">
                <div class="col-auto d-none d-lg-block"> <!-- d-none c-à-d de base ce block sera caché, sauf si il en en écran large : d-lg-block-->
                    <img src="../../sources/images/Aminaux/Chats/Framboise/Framboise.jpg" style="height: 200px;" alt="Photo de Framboise" />
                </div>
                <div class="col p-3 d-flex flex-column position-static perso_bgRed">
                    <h3 class="mb-0 perso_colorRougeMenu perso_policeTitre perso_textShadow">Levée de <br>fonds</h3>
                    <p class="perso_size12 mt-2">Un petit coucou de notre doyenne CHIPIE (20ans) en famille d'accueil longue durée chez notre trésorière
                        La miss a un programme journalier surchargé... 
                    </p>
                    <buttom class="btn my-2 mx-auto d-block btn-primary"><a href="#" style="color: white;">Visiter</a></buttom>
                </div>
            </div>
        </div>

    </div>

<?php include("../Commons/footer.php")?>