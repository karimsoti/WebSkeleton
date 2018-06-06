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
    private $workType;

    public function __construct($name, $description, $genre) {
        parent::__construct($name, $description);               // equivelent to super in Java
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }

}
