<?php
class building {
    // properties 
    protected $name;
    protected $height;
    //privete 
    // constructor
    function __construct($name, $height) {
        $this->name = $name;
        $this->height = $height;
    }
    //acceor method
    function setName($name) {
        $this->$name = $name;
    }
    function getName() {
        return $this->name;
    }
    function setHeight($height) {
        $this->height = $height;
    }
    function getHeight() {
        return $this->height;
    }
    function getProfile() {
        $profile = "{$this->name}の高さは　{$this->height}は mで。";
        return $profile;
        
    }
}
?>
