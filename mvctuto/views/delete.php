<?php
$tit="THE personne rejected from list ";

ob_start();
var_dump($Id);
echo "do u want rly delete the candidate ";

$content=ob_get_clean();
include_once 'views/layout.php';