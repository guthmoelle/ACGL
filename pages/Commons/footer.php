
        </div>
        <!-- Footer du site -->
            <div class="text-center py-0 mt-5">
                <a href="#ancremenu" class="ancremenu_link">
                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                </a>
            </div>
            <footer class="bg-dark text-center text-white p-2">
                <div id="partie1">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <?= styleTitreNiveau4("A.C.G.L", COLOR_ASSO); ?>
                            <ul class="acgl pl-0 perso_size15">
                                <li><a href="../Global/association.php">Qui sommes-nous ?<a></li>
                                <li><a href="../Global/partenaires.php">Nos Partenaires<a></li>
                                <li><a href="#">Télécharger les documents<a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-4 perso_size15">
                            <?= styleTitreNiveau4("Actualités", COLOR_ACTUS); ?>
                            <ul class="actus pl-0">
                                <li><a href="../Global/actus.php">Annonces</a></li>
                                <li><a href="#">Evénements<a></li>
                                <li><a href="#">Actions<a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-4 perso_size15">
                            <?= styleTitreNiveau4("Contacts", COLOR_CONTACT); ?>
                            <ul class="contact pl-0">
                                <li><a href="../Contact/contact.php">Formulaire de Contact</a></li>
                                <li><a href="../Contact/don.php">Faire un Don</a></li>
                                <li><a href="../Contact/mentions.php">Mentions Légales</a></li>
                            </ul>
                        </div>
                        <!--
                        <div class="col-12 col-lg-3">
                            <h4 style="font-size:18px">Newsletter</h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre email"/>
                                    <input type="button" class="btn btn-primary" value="S'abonner"/>
                                </div>
                            </form>
                        </div>-->
                    </div>
                </div>

                <div id="partie2">
                    <div class="row socials">
                        <div class="col-12 col-lg-6">
                            <a href="../Global/blog.php" class="social_link perso_colorRougeMenu">Blog</a>
                        </div>

                        <div class="col-12 col-lg-6">
                            <a href="https://www.facebook.com/" target="_blank" class="social_link">
                                <i class="fa fa-facebook bar_link"> | </i> 
                            </a>

                            <a href="https://twitter.com/" target="_blank" class="social_link">
                                <i class="fa fa-twitter bar_link"> | </i> 
                            </a>

                            <a href="https://www.instagram.com/" target="_blank" class="social_link">
                                <i class="fa fa-instagram bar_link"> | </i>
                            </a>

                            <a href="https://www.youtube.com/" target="_blank" class="social_link">
                                <i class="fa fa-youtube bar_link"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div id="partie3">
                    <div class="py-2 d-inline-block text-white">
                        &copy; A.C.G.L 2020-2021
                    </div>
			    </div>
                
            </footer>
            
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>
</body>
</html>