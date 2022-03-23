<?php

require_once 'bootstrap.php';

// Récupérer le paramètre id dans l'URL

$id = $_GET['id'];

// Récupérer les données d'un docteur à partir de son id

$doctor = $entityManager->getRepository(Doctor::class)->find($id);

echo $twig->render('doctor.html.twig', ['doctor' => $doctor]);