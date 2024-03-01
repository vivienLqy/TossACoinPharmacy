<?php require_once dirname(__DIR__) . ('/header.php'); ?>

<section class="container mt-4 bg-op">
    <div class="row m-5 d-flex justify-content-center">
        <div class="col-md-9">
            <h2 class="h1-responsive neonText my-4 pb-1 text-center">Formulaire de contact</h2>
            <form name="contact-form" id="formulaire" class="text-center mt-5">
                <?php require_once __DIR__ . ("/form.php"); ?>
                <div class="row mt-4 mx-0">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" name="Sujet" id="inputSujet" class="form-control bg-body-secondary rounded-0 text-uppercase" placeholder="Sujet">
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mx-0">
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea name="message" rows="6" id="InputMessage" class="form-control bg-body-secondary rounded-0 text-uppercase " placeholder="Votre Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="my-4 text-center">
                    <button type="submit" class="btn btn-red rounded-2 text-light gold rounded-0 w-20 text-uppercase ">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . ("/footer.php"); ?>