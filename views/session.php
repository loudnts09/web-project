<?php

    session_start();

    print("<pre>");
    print_r($_SESSION);
    print("</pre>");

    echo $_SESSION['dados']['foto'];
?>