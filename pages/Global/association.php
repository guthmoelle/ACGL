<?php 
include("../Commons/header.php");
echo styleTitreNiveau1("Association des Congolais du Grand Lyon (A.C.G.L) <br/> Villeurbanne (Rhône 69)", COLOR_ASSO);
?>

    <div class="row align-items-center">
        <div class="col-12 col-lg-3 text-center mb-3">
            <img class="img-fluid" src="../../sources/images/Autres/ACGL-logo.png" alt="logo de l'association" />
        </div>
        <div class="col-12 col-lg-9">
        <p>C'est l'histoire de 5 nanas, 5 amies unies dans un même combat : <span class="badge badge-warning">Aimer</span>, 
            <span class="badge badge-warning">Protéger </span> et 
            <span class="badge badge-warning">Secourir</span> les Animaux.</p>
        <p>
            Après plusieurs années de bénévolat en électrons libres, le pas est sauté : 
            l'Association "NOS AMIS NOS ANIMAUX" (N.A.N.A) est née !!!
        </p>
        <p>
            Nous mettons un point d'honneur à ne jamais déroger à nos valeurs en matière de Protection Animale : 
            privilégier la qualité des prises en charge plutôt que la quantité avec pour objectifs le 
            <span class="badge badge-warning">RESPECT</span>
            et le <span class="badge badge-warning">BIEN-ETRE</span> des animaux.
        </p>
        <p>
            Nous remercions chaleureusement tous ceux qui nous ont déjà soutenues dans nos actions : nos familles, 
            nos amis ainsi que des particuliers, 
            associations de protection animale et cabinets vétérinaires qui nous font confiance et nous 
            accompagnent au quotidien.
            Nous souhaitons plus que jamais que ces collaborations déjà existantes, mais aussi celles à venir, 
            nous fassent encore et toujours écrire de <span class="badge badge-warning">BELLES HISTOIRES</span>.
        </p>
        <p>
            <a href="../Global/erreur.php"><button type="button" class="btn btn-primary">Rejoignez nous ! &raquo;</button></a>pour suivre nos actions et partager avec nous cette nouvelle aventure !!!!!
        </p>
        </div>
    </div>

    <hr/>
    <?= styleTitreNiveau2("L'équipe", COLOR_ASSO); ?>
    <div class="row align-items-center mb-5">
        <div class="col-12 col-lg-3 text-center">
        <span class="badge badge-warning">L'équipe en photo !</span>
            <img class="img-fluid"  src="../../sources/images/Autres/equipe.jpg" alt="equipe" />
        </div>
        <div class="col-12 col-lg-9">
            <span class="badge badge-primary">Marie</span> : présidente<br />
            <span class="badge badge-success">Julie</span> : trésorière  <br />
            <span class="badge badge-warning">Laeti</span> : secrétaire <br />
            <span class="badge badge-danger">Emma</span> : secrétaire adjointe <br />
            <span class="badge badge-info">Florian</span> : Charge de communication
        </div>
    </div>

<?php include("../Commons/footer.php")?>