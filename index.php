<?php

use Entity\Doctor;
use Entity\Speciality;

require_once 'bootstrap.php';
//appel le model (Doctrine)
$doctors = $entityManager->getRepository(Doctor::class)->findAll();



//$specialities = $entityManager->getRepository(Speciality::class)->findAll();

//Envoyer les données à la vue (Twig)
echo $twig->render("index.html.twig", ['doctors' => $doctors]);




