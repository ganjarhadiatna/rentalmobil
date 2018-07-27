<?php
require '../config/database.php';

$cn = new database();
echo $cn->getAdmin();