<?php
// file : oopmvc/detail.php
require_once "model/Skp.php";
$anggota = getAnggotabyId($_GET['Id']);

require "view/skp/index.php"

?>