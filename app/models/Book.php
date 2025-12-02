<?php


namespace App\Models;


class Book extends \Core\Model
{
    public $isbn, $cover, $title, $resume, $author_id, $category_id;


    // Liaisons 1-N
    protected $author, $category;
}
