<?php
// classes/Fiction.php

require_once 'Book.php';

class Fiction extends Book {
    private $genre;

    public function __construct($title, $author, $price, $genre) {
        parent::__construct($title, $author, $price);
        $this->genre = $genre;
    }

    public function getDetails() {
        return parent::getDetails() . ", Genre: {$this->genre}";
    }
}
?>
