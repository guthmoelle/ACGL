<?php include("../Commons/header.php"); ?>


    <?= styleTitreNiveau1("Mer", COLOR_BLOG); ?> 
    <div class="row border border-dark rounded-lg m-2 align-items-center perso_bgGreen">
        <div class="col p-2 text-center">
            <img class="img-thumbnail" style="max-height:180px;" src="../../sources/images/Aminaux/Chats/Framboise/mer.jpg" alt="mer" />
        </div>
        
        <div class="col-6 col-md-4 text-center">
        <div class="mb-2">Situé à XXXXXXXXX</div>
            <div class="mb-2">Dans XXXXXXXXXXX</div>
            <div class="my-3">
                <span class="badge badge-warning m-1 p-2 "> douce </span> <!-- balise inline -->
                <span class="badge badge-warning m-1 p-2 "> calme </span> <!-- balise inline -->
                <span class="badge badge-warning m-1 p-2 "> jouleuse </span> <!-- balise inline -->
            </div>
        </div>
        <div class="col-12 col-md-4">
            En général les frais d'adoption sont les suivants : <br>
            Frais d'adoption : 60€ + 35€ (vaccins, sur demande) <br>
            Pour plus d'information, voir la section dédiée, présente plus bas. 
        </div>
    </div>


    <div class="row no-gutters align-items-center">
        
        <div class="col-12 col-lg-6 p-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
                </ol>
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <img src="../../sources/images/Aminaux/Chats/Framboise/mer.jpg" class="img-thumbnail" style="height:500px;" alt="mer1">
                    </div>
                    <div class="carousel-item">
                        <img src="../../sources/images/Aminaux/Chats/Framboise/mer.jpg" class="img-thumbnail" style="height:500px;" alt="mer2">
                    </div>
                    <div class="carousel-item">
                        <img src="../../sources/images/Aminaux/Chats/Framboise/mer.jpg" class="img-thumbnail" style="height:500px;" alt="mer3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div>
                <?= styleTitreNiveau2("Qui suis-je ?", COLOR_BLOG); ?> 
                Bonjour les chat’mis <br> Je me présente à vous « PATAPOUF » type Persan noir et blanc né le 03/05/2015.
                <br>Je faisais partie du SOS des 8 loulous maltraités que les Tatys ont pris en charge. 
                <br>
            </div>
            <hr />
            <div>
                <!-- <img src="../../sources/images/Autres/icones/oeil.jpg" alt="oeil" width="50" height="50" class="d-block mx-auto" /> -->
                Je ne me trouve pas très loin de Saint-Girons 09<br />
                Allez à vos claviers, je vous attend et je sais que nous pourrons vivre des belles choses ! ???? 
            </div>
        </div>

    </div>

<?php include("../Commons/footer.php") ?>