<?php
/**
 * Description of Station
 *
 * @author pieterc
 */
class Station {
    private $name;
    private $x;
    private $y;
    private $id;

    function __construct($name, $locationX, $locationY, $id = null) {
        $this->name = $name;
        $this->x = $locationX;
        $this->y = $locationY;
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function getId(){
        return $this->id;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    
}
?>
