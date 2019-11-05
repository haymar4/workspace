<?php
require_once("Building.php");
?>

<?php
class Tower extends Building {
    private $builtYear;
    
    function __construct($name, $height, $builtYear) {
        parent::__construct($name, $height);
        $this->builtYear = $builtYear;
    }
    
    function setBuiltYear($year) {
        $this->builtYear = $year;
    }
    
    function getBuiltYear() {
        return $this->builtYear;
    }
    function getProfile() {
        $profile = "{$this->name} の高さは {$this->height} mで、{$this->builtYear} 年 に開業しました";
        return $profile;
    }
    
}

?>