<?php
// classes/NonFiction.php

require_once 'Book.php';

class NonFiction extends Book {
    private $field;

    public function __construct($title, $author, $price, $field) {
        parent::__construct($title, $author, $price);
        $this->field = $field;
    }

    public function getDetails() {
        return parent::getDetails() . ", Field: {$this->field}";
    }
}
?>
