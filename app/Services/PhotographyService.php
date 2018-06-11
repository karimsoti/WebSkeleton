<?php

namespace App\Services;

use App\Services\Service;

/**
 * Inherits the name and description of the Service superclass
 *
 * @author kabdelbaki
 */
class PhotographyService extends Service {

    private $genre;

    /**
     * Constructor for the PhotoGraphyService subclass
     * @param type $name
     * @param type $description
     * @param type $genre
     * @param type $workType
     */
    public function __construct($name, $description, $genre, $imageName) {
        parent::__construct($name, $description, $imageName);               // equivelent to super in Java
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }

}
