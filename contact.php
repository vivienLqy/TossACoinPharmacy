<?php
require __DIR__ . ("/utilities/header.php");
?>
<section class="container mt-4 bg-op">
    <!-- GRILLE COORDONEES + FORUMUALIRE -->
    <div class="row m-5 d-flex justify-content-center">
        <!-- GRILLE COORDONNEES -->
        <div class="col-md-9">
            <h2 class="h1-responsive text-white my-1 pb-1 text-center">Formulaire de contact</h2>
            <form name="contact-form" id="formulaire" class="text-center mt-5">
                <!--Grid row-->
                <?php require __DIR__ . ("/utilities/form.php"); ?>
                <!--Grid row-->
                <div class="row mt-4 mx-0">
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" name="Sujet" id="inputSujet" class="form-control bg-body-secondary rounded-0 text-uppercase" placeholder="Sujet">
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mx-0">
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea name="message" rows="6" id="InputMessage" class="form-control bg-body-secondary rounded-0 text-uppercase " placeholder="Votre Message"></textarea>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-success gold rounded-0 w-20 text-uppercase">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php require __DIR__ . ("/utilities/footer.php"); ?>
</body>
</html>
