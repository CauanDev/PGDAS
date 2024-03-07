<?php
session_start();
unset($_SESSION["cpf"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
session_destroy();
header("Location: index.php");
exit;