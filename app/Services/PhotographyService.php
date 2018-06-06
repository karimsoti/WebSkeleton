<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Inherits the name and description of the Service superclass
 *
 * @author kabdelbaki
 */
class PhotographyService extends Service {

    private $genre;

    public function __construct($name, $description, $genre) {
        parent::__construct($name, $description);               // equivelent to super in Java
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }

}
