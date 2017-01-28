<?php

require_once __DIR__ . '/../lib/sql.php';

function getAllNews(){
    $db = new Sql();
    $sql="SELECT * FROM news";
    return $db->getAllNews($sql);

}

