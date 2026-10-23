<?php
$senha = "21312";

$embaralhar = password_hash($senha, PASSWORD_DEFAULT);

echo $embaralhar;
?>