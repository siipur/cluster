<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'songhopur';
$db_database	= 'crud_biodata'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>