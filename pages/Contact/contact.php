
<?php 
include("../Commons/header.php"); 
echo styleTitreNiveau1("Contact", COLOR_CONTACT) 
?>


    <div class="map-responsive mt-5 text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.599068705821!2d4.876370314888424!3d45.779224720389614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c021b09fdd21%3A0x145185d5fdabbf99!2s39%20Rue%20Georges%20Courteline%2C%2069100%20Villeurbanne!5e0!3m2!1sfr!2sfr!4v1588598484229!5m2!1sfr!2sfr"
        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div class="row mb-5">
        <div class="col-12 col-lg-6">
            <?= styleTitreNiveau3("Contactez-nous :", COLOR_CONTACT) ?>
            <div class="mt-4">
                <p>
                <img src="../../sources/images/Autres/icones/courrier.png" width="30px;" alt="courrier"/>
                    Par courrier : Hameau de la Souleille - 09420 Clermont, Midi-Pyrenees, France
                </p>
                <p>
                
                    <img src="../../sources/images/Autres/icones/mail.png" width="30px;" alt="mail"/>
                    Par mail : <a href="mailto:associationnosamisnosanimaux@gmail.com">acgl@gmx.com</a>
                </p>
                <p>
                    <img src="../../sources/images/Autres/icones/tel.png" width="30px;" alt="tel"/>
                    Par téléphone : +33 (0) 6 68 13 47 93
                </p>
                <p>
                    <span class="badge badge-pill badge-danger">Ou</span> par notre <span class="badge badge-pill badge-warning">formulaire</span> de contact :
                </p>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <?= styleTitreNiveau3("Formulaire de contact :", COLOR_CONTACT) ?>
            <form method="POST" action="#" class="mt-4">
                <div class="form-group row no-gutters align-items-center">
                    <label for="nom" class="col-auto pr-3">Nom :</label>
                    <input type="text" name="nom" id="nom" class="form-control col" Placeholder = "nom" required/>
                </div>
                <div class="form-group row no-gutters align-items-center">
                    <label for="mail" class="col-auto pr-3">Email :</label>
                    <input type="email" name="mail" id="mail" class="form-control col" Placeholder = "nom@exemple.com" required/>
                </div>
                <div class="form-group row no-gutters align-items-center">
                    <label for="objet" class="col-auto pr-3">Objet :</label>
                    <select class='form-control col' id="objet" name="objet">
                        <option value="question">Question</option>
                        <option value="adoption">Information(s)</option>
                        <option value="donnation">Soutien</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <div class="form-group row no-gutters align-items-center">
                    <label for="captcha" class="col-auto pr-3">Combien font 3+5 :</label>
                    <input type="number" name="captcha" id="captcha" class="form-control col" required/>
                </div>
                <input type="submit" class="btn btn-primary mx-auto d-block" value="Valider" />
            </form>

        </div>
    </div>

    <?php
        if(isset($_POST['nom']) && !empty($_POST['nom']) &&
            isset($_POST['mail']) && !empty($_POST['mail']) &&
            isset($_POST['objet']) && !empty($_POST['objet']) &&
            isset($_POST['message']) && !empty($_POST['message']) &&
            isset($_POST['captcha']) && !empty($_POST['captcha'])
        ){
            $captcha = (int) $_POST['captcha'];
            if($captcha === 8){
                $nom = htmlentities($_POST['nom']);
                $mail = htmlentities($_POST['mail']);
                $objet = htmlentities($_POST['objet']);
                $message = htmlentities($_POST['message']);
                $destinateur = "le mail de l'association";
                mail($destinateur, $objet. " - " . $nom, "Mail : ". $mail. "Message :". $message);

                echo '<div class="alert alert-success role="alert">';
                echo 'Message envoyé !';
                echo '</div>';

            }else{
                echo '<div class="alert alert-danger role="alert">';
                echo 'Erreur de captcha, recommencer !';
                echo '</div>';
            }
        }
    ?>
    

<?php include("../Commons/footer.php")?>