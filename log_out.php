<?php
// initialiseer de session
session_start();

    // unset session variabelen.
    session_unset();

        // destroy de session
        session_destroy();

            // redirect user naar de login form
            header('location: login.php');
                    exit;

?>