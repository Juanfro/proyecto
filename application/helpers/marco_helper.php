<?php

function enmarcar($controlador, $rutaVista, $datos = [])
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['nombreusuario'])) {
        $datos['header']['usuario']['nombre'] = $_SESSION['nombreusuario'];
    }
    $controlador->load->view('templates/head', $datos);
    $controlador->load->view('templates/header', $datos);
    $controlador->load->view('templates/nav', $datos);
    $controlador->load->view($rutaVista, $datos);
    $controlador->load->view('templates/footer', $datos);
    $controlador->load->view('templates/end');
}

?>