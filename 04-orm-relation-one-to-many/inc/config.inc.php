<?php
// base de données
require_once 'idiorm.inc.php';
require_once 'paris.inc.php';
ORM::configure('mysql:host=localhost;dbname=cesi_vip');
ORM::configure('username', 'root');
ORM::configure('password', '');
