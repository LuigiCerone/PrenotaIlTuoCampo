<?php
require_once('Database.php');

class Supply
{
    private $name;
    private $description;

    /**
     * Supply constructor.
     * @param $name
     * @param $description
     */
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

}