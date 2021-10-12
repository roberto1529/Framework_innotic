<?php
session_start();
$user =  $_SESSION['user'];
$dni = $user['dni'];
$us = $user['user'];
$no = $user['Nombre'];
$ap = $user['Apellido'];
$rl = $user['Rol'];
$reg = $user['Registro'];
?>