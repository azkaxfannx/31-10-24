<?php
// routes.php

require_once 'app/controllers/SponsorController.php';
// require_once 'app/controllers/AgendaController.php';
// require_once 'app/controllers/EventsController.php';
// require_once 'app/controllers/PesertaController.php';

$sponsorController = new SponsorController();
// $agendaController = new AgendaController();
// $eventsController = new EventsController();
// $pesertaController = new PesertaController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/' || $url == '/sponsor') {
        $sponsorController->index();
    } elseif ($url == '/sponsor/create') {
        $sponsorController->create();
    } elseif ($url == '/sponsor/store') {
        $sponsorController->store();
    } elseif (strpos($url, '/sponsor/edit') !== false) {
        $id = $_GET['id'];
        $sponsorController->edit($id);
    } elseif ($url == '/sponsor/update') {
        $sponsorController->update();
    } elseif (strpos($url, '/sponsor/hapus') !== false) {
        $id = $_GET['id'];
        $sponsorController->hapus($id);
    } elseif ($url == '/agenda') {
        $controller->create();
    } elseif ($url == '/agenda/create') {
        $controller->create();
    } elseif ($url == '/agenda/store') {
        $controller->store();
    } elseif (strpos($url, '/agenda/edit') !== false) {
        $id = $_GET['id'];
        $controller->edit($id);
    } elseif ($url == '/agenda/update') {
        $controller->update();
    } elseif (strpos($url, '/agenda/hapus') !== false) {
        $id = $_GET['id'];
        $controller->hapus($id);
    }else {
        echo "404 Not Found";
    }