<?php
function createdropdown(){
    

    //tietokantayhteys
    require_once('db.php'); //db-tiedosto käyttöön
    $conn = createDbConnection(); //kutsutaan funktiota
    $sql = "SELECT 'name_'";  
    $prepare = $conn->prepare($sql);
    $prepare->execute();
    $rows = $prepare->fetchAll();
    $html = '<h1>Horror movies</h1>';
    $html .= '<ul>';
    foreach($rows as $row) {
        $html .= '<li>' . $row['name_'] .
        '</li>';
    }
    $html .= '</ul>';
    return $html;



}