<?php

include_once 'db/connexion.php';
include_once 'db/queries.php';

switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        require './views/index.php';
        break;
    case '/presences':
        require './views/attendances/index.php';
        break;
    case '/etudiants':
        require './views/students/index.php';
        break;
}