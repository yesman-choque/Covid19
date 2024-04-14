<?php
    $countries = ['Brazil', 'Canada', 'Australia'];
    foreach ($countries as $country) {
        if (isset($_POST['country']) and $country === $_POST['country']) {
            echo '<option value="' . $_POST['country'] . ' " selected>' . $_POST['country'] . '</option>';
        } else {
            echo '<option value="' . $country . '">' . $country . '</option>';
        }
    }
?>