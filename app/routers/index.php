<?php

// ROUTE PAR DEFAUT
// PATTERN
// CTRL: pagesController
// ACTION: home

include '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
