<?php

    //tietokantayhteys
    require_once('db.php'); //db-tiedosto käyttöön
    $html = "<h2>movies</h2>";
    $html .= createdropdown();
    echo $html;

