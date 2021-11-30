<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if ($email == 'roberto@mail.com') {
        header('Location: http://localhost:8080/pr77/app/views/pages/elect.php');
        exit;
    } else {
        echo ('Datos incorrectos');
    }
}