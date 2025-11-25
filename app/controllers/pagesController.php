<?php


namespace App\Controllers;

use \App\Models\BooksRepository, \App\Models\AuthorsRepository;


class PagesController
{
    public static function homeAction()
    {

        global $content, $title;

        $books = BooksRepository::findAll(3);
        $authors = AuthorsRepository::findAll(3);


        ob_start();
        include '../app/views/pages/home.php';
        $content = ob_get_clean();
    }
}
