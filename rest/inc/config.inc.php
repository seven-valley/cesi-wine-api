<?php
// base de données
require_once 'idiorm.inc.php';
require_once 'paris.inc.php';
ORM::configure('mysql:host=localhost;dbname=wine_api');
ORM::configure('username', 'root');
ORM::configure('password', '');
