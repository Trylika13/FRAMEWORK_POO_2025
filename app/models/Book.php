<?php


namespace App\Models;


class Book
{
    public $id, $isbn, $cover, $title, $resume, $author_id, $category_id, $created_at;


    // Liaisons
    private $author, $category;


    public function __get(string $prop): mixed
    {

        $setterName = "set" . ucfirst($prop);
        if (method_exists($this, $setterName)):
            $this->$setterName();
            return $this->$prop;
        endif;
        return true;
    }


    public function setAuthor(): void
    {

        if (!$this->author):
            $this->author = AuthorsRepository::findOneById($this->author_id);

        endif;
    }
    public function setCategory(): void
    {
        if (!$this->category):
            $this->category = CategoriesRepository::findOneById($this->category_id);
        endif;
    }
}
