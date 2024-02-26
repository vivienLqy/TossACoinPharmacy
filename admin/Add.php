<?php
// Inclusion des fichiers de configuration et de fonctions
require_once dirname(__DIR__) . ('/config/config.php');
require_once dirname(__DIR__) . ('/function/database.fn.php');
$db = getPDOlink($config);
require_once dirname(__DIR__) . ('/function/potion_fn.php');
require_once dirname(__DIR__). ('/utilities/header.php');
$doctor_names = findDoctor($db);
$ingredient_names = findIngredient($db);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $price = $_POST['price'];
    $doctor_name = $_POST['doctor_name'];
    $rating = $_POST['rating'];
    $duration = $_POST['duration'];
    $ingredient = $_POST['ingredient'];
    $toxic = $_POST['toxic'];
    $comment = $_POST['description'];
    
    $sql = "INSERT INTO "
}
?>
 <div class="container">
      <div class="text-center mt-5 mb-4 ff-tw neonText">
         <h3>Add New Product</h3>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3 ff-tw neonText">
               <div class="col">
                  <label class="form-label">Nom:</label>
                  <input type="text" class="form-control" name="title">
               </div>

               <div class="col">
                    <label class="form-label">Chemin d'image:</label>
                    <input type="text" class="form-control" name="pathImg">
               </div>
            </div>

            <div class="row mb-3 ff-tw neonText">
               <div class="col">
                  <label class="form-label">Prix:</label>
                  <input type="text" class="form-control" name="price">
               </div>

               <div class="col ff-tw neonText">
                    <label class="form-label">Nom du docteur:</label>
                    <select class="form-control" name="doctor" id="">
                        <?php foreach ($doctor_names as $doctor_name): ?>
                            <option value="doctor_name"><?= $doctor_name['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3 ff-tw neonText">
               <div class="col">
                  <label class="form-label">Note:</label>
                  <input type="text" class="form-control" name="rating">
               </div>

               <div class="col ff-tw neonText">
                    <label class="form-label">Durée</label>
                    <input type="text" class="form-control" name="duration">
                </div>
            </div>

            <div class="row mb-3 ff-tw neonText">
               <div class="col">
                  <label class="form-label">Utilisation:</label>
                  <input type="text" class="form-control" name="use">
               </div>

                <div class="col ff-tw neonText">
                    <label class="form-label">Toxicité</label>
                    <input type="text" class="form-control" name="toxic">
                </div>
            </div>

            <div class="row mb-3 ff-tw neonText">
                <div class="mb-3 col-4 ff-tw neonText">
                    <label class="form-label">Ingredient:</label>
                    <select class="form-control" name="ingredient">
                            <option value="default">-Choissisez un ingredient-</option>
                        <?php foreach ($ingredient_names as $ingredient_name): ?> 
                            <option value="ingredient"><?= $ingredient_name['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3 col-4 ff-tw neonText">
                    <label class="form-label">Ingredient 2:</label>
                    <select class="form-control" name="ingredient">
                            <option value="default">-Choissisez un ingredient-</option>
                        <?php foreach ($ingredient_names as $ingredient_name): ?> 
                            <option value="ingredient"><?= $ingredient_name['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3 col-4 ff-tw neonText">
                    <label class="form-label">Ingredient 3:</label>
                    <select class="form-control" name="ingredient">
                            <option value="default">-Choissisez un ingredient-</option>
                        <?php foreach ($ingredient_names as $ingredient_name): ?> 
                            <option value="ingredient"><?= $ingredient_name['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="mb-3 ff-tw neonText">
               <label class="form-label">Description</label>
               <textarea  class="form-control" name="description"></textarea>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Enregistrer</button>
               <a href="index.php" class="btn btn-danger">Annuler</a>
            </div>
         </form>
      </div>
   </div>



</main> 
  <?php
//   require_once dirname(__DIR__) . ("/utilities/footer.php");
   ?>  
</body>
</html>

