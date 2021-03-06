<?php

namespace App\Services;

/**
 * Service superclass, used by the subclasses to determine what type of web-site this is. 
 *
 * @author kabdelbaki
 */
class Service {

    private $serviceName;
    private $serviceDescription;
    private $imageName;

    /**
     * Constructor used to instantiate the Service object.
     * @param type $name
     * @param type $description
     */
    public function __construct($name, $description, $imageName) {
        $this->serviceName = $name;
        $this->serviceDescription = $description;
        $this->imageName = $imageName;
    }

    /**
     * Gets value of the serviceName instance variable
     * @return type
     */
    public function getServiceName() {
        return $this->serviceName;
    }

    /**
     * Gets the value of the serviceDescription instance variable
     * @return type
     */
    public function getServiceDescription() {
        return $this->serviceDescription;
    }

    public function getImageName() {
        return $this->imageName;
    }

}
