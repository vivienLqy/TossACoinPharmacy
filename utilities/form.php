<?php
require_once dirname(__DIR__) . ('/assets/form.data.php');

 echo '<div class="row m-5 d-flex justify-content-center">';
foreach ($name as $value) {
    echo '<div class="col-md-6">
        <div class="md-form mb-0">
            <input type="' . $value['type'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '" class="' . $value['class'] . '"
                placeholder="' . $value['placeholder'] . '">
        </div>
    </div>';
}

foreach ($coord as $value) {
    echo '<div class="col-md-6">
        <div class="md-form mb-0">
            <input type="' . $value['type'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '" class="' . $value['class'] . '"
                placeholder="' . $value['placeholder'] . '">
        </div>
    </div>';
}
echo '</div>';
?>